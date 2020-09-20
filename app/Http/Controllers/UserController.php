<?php

namespace App\Http\Controllers;

use App\User;
use App\Gender;
use App\UserDoc;
use App\MaritalStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class UserController extends Controller
{
    public function index()
    {
        return view('account.bi.dashboard');
    }

    public function logout(Request $request)
    {
        if (Auth::guard('users')->logout()) {
            $request->session()->invalidate();
            // return response()->json([
            //     'status' => true, 'message' => ucwords('Logout Successfull'),
            // ]);
            return redirect()->route('homepage');
        } else {
            // return response()->json([
            //     'status' => false, 'message' => ucwords('Logout Failed'),
            // ]);
            return redirect()->route('account.dashboard');
        }
    }

    public function login()
    {
        return view('account.auth.login');
    }
    public function postlogin(Request $request)
    {
        // validate
        $request->validate([
            'email' => 'required|email', 'password' => 'required'
        ]);

        if (Auth::guard('users')->attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();

            return response()->json([
                'status' => true, 'message' => ucwords('Login Successfull'),
            ]);
        }
        return response()->json([
            'status' => false, 'message' => ucwords('Invalid Login'),
        ]);
    }
    public function register()
    {
        return view('account.auth.register');
    }

    public function postRegister(Request $request)
    {
        // validate 
        $rules = [
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
        ];
        $customMessages = [
            'email.unique' => 'Email already exist',
            'required' => 'The :attribute is required.'
            // 'required' => 'The :attribute field can not be blank.'
        ];

        $this->validate($request, $rules, $customMessages);

        $token = Hash::make($request->email);
        $token = str_replace('/', '', str_replace('$', '', $token));

        $user = new User();
        foreach ($request->all() as $key => $value) {
            $user[$key] = $value;
        }
        unset($user['_token']);
        $user->password = bcrypt($user->password);
        $user['verified_token'] = $token;

        $user->save();

        // Send Verification Mail
        try {
            $mail = (object) null;
            $mail->template = 'account.email.verify';
            $mail->from_mail = env('SENDER_EMAIL');
            $mail->from_name = env('APP_NAME');
            $mail->to_email = $user->email;
            $mail->to_name = ucwords($user->firstname) . " " . ucwords($user->lastname);
            $mail->subject = 'Verify Account';
            $mail->verify_url = env('APP_URL') . '/account/verify/' . $user->id . '?token=' . $token;
            Mail::send($mail->template, ['mail' => $mail], function ($m) use ($mail) {
                $m->from($mail->from_mail, $mail->from_name);
                $m->to($mail->to_email, $mail->to_name)->subject($mail->subject);
            });
            // Log::debug('sent::' . json_encode($send));
        } catch (\Exception $ex) {
            Log::debug($ex->getMessage());
        }

        if ($user) {
            return response()->json([
                'status' => true, 'message' => ucwords('Registration Successfull.., Kindly check your email for verification mail'),
            ]);
        }
        return response()->json([
            'status' => false, 'message' => ucwords('Registration Failed'),
        ]);
    }

    public function notverify()
    {
        // return 'Account Not Verify... Kindly Check Your Email';
        return view('account.auth.notverify');
    }

    public function verify(Request $request)
    {
        $account = User::where('id', $request->route('id'))->first();
        if ($account && $account->is_verify == 1) {
            return response()->json([
                'status' => false, 'message' => ucwords('Account had already been verified!'),
            ]);
        }

        // check if token expire
        $current =  Carbon::parse(date("Y-m-d H:i:s"));

        $inverval = $current->diff(Carbon::parse($account->token_at));

        if ($inverval->h >= 1) {
            return response()->json([
                'status' => false, 'message' => ucwords('Token Expired'),
            ]);
        }

        if ($request->input('token') == $account->verified_token) {
            // Navigate to verification page
            return view('account.auth.verify', ['account' => $account]);
        }

        return response()->json([
            'status' => false, 'message' => ucwords('Invalid Token'),
        ]);
    }

    public function postVerify(Request $request)
    {
        // Check if verify
        $account = User::where('id', $request->route('id'))->first();
        if ($account && $account->is_verify == 1) {
            return response()->json([
                'status' => false, 'message' => ucwords('Account had already been verified!'),
            ]);
        }

        // validate
        $request->validate([
            'address1' => 'required',
            'address2' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'region' => 'required',
            'zip' => 'required',
            'taxid' => 'required',
            'phone' => 'required',
            'gender' => 'required',
        ]);

        foreach ($request->all() as $key => $value) {
            $account[$key] = $value;
        }
        unset($account['_token']);
        $account->is_verify = 1;
        $account->verified_token = null;
        $account->token_at = null;
        $account->verified_at = date("Y-m-d H:i:s");

        if ($account->save()) {
            return response()->json([
                'status' => true, 'message' => ucwords('Account Verify Successfully'),
            ]);
        } else {
            return response()->json([
                'status' => false, 'message' => ucwords('Verification Failed'),
            ]);
        }
    }

    public function request()
    {
        return view(
            'account.auth.requesttoken',
            [
                'pageTitle' => 'Request For Verification Mail',
                'btnTitle' => 'Request'
            ]
        );
    }

    public function postrequest(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        $account = User::where('email', $request->input('email'))->first();

        if (!$account) {
            return response()->json([
                'status' => false, 'message' => ucwords("if we found an account associated with tha email address, we've sent verifcation instruction to the primary email addresson the account"),
            ]);
        }

        if ($account && ($account->email_verified_at != null || $account->email_verified_at == 1)) {
            return response()->json([
                'status' => false, 'message' => ucwords('Acount already been verified!'),
            ]);
        }

        $token = Hash::make($request->email);
        $token = str_replace('/', '', str_replace('$', '', $token));

        $account->verified_token = $token;
        $account->token_at = date("Y-m-d H:i:s");
        $account->save();


        // Send Verification Mail
        try {
            $mail = (object) null;
            $mail->template = 'account.email.verify';
            $mail->from_mail = env('SENDER_EMAIL');
            $mail->from_name = env('APP_NAME');
            $mail->to_email = $account->email;
            $mail->to_name = ucwords($account->firstname) . " " . ucwords($account->lastname);
            $mail->subject = 'Verify Account';
            $mail->verify_url = env('APP_URL') . '/account/verify/' . $account->id . '?token=' . $token;
            Mail::send($mail->template, ['mail' => $mail], function ($m) use ($mail) {
                $m->from($mail->from_mail, $mail->from_name);
                $m->to($mail->to_email, $mail->to_name)->subject($mail->subject);
            });
            // Log::debug('sent::' . json_encode($send));
        } catch (\Exception $ex) {
            Log::debug($ex->getMessage());
        }

        if ($account) {
            return response()->json([
                'status' => true, 'message' => ucwords("if we found an account associated with tha email address, we've sent verifcation instruction to the primary email addresson the account"),
            ]);
        }
        return response()->json([
            'status' => false, 'message' => ucwords("if we found an account associated with tha email address, we've sent verifcation instruction to the primary email addresson the account"),
        ]);
    }


    public function documentation()
    {
        $userDoc = UserDoc::all();
        return view('account.documentation', ['userDoc' => $userDoc]);
    }

    public function profile()
    {
        $userProfile = Auth::user();
        return view('account.profile.profile')->with('userProfile', $userProfile);
    }

    public function editProfile(Request $request)
    {
        $account = Auth::guard('users')->user();

        if (!$account) return view('account.errors.404');

        $genders = Gender::all();
        $statuses = MaritalStatus::all();

        return view('account.profile.edit', [
            'userProfile' => $account,
            'genders' => $genders,
            'statuses' => $statuses
        ]);
    }

    public function postEditProfile(Request $request)
    {
        dd($request->all());
        // validate

        $account = Auth::guard('users')->user();

        if (!$account) return view('account.errors.404');

        foreach ($request->all() as $key => $value) {
            $account[$key] = $value;
        }
        unset($trade['_token']);

        $account->save();
        if ($account) {
            return redirect()->route('account.editprofile');
        }
    }

    public function wishlist()
    {
        return 'Wishlist Page';
        // return view('account.profile.profile');
    }
    public function tradeconsole()
    {
        return 'Trade Page';
        // return view('account.profile.profile');
    }
}
