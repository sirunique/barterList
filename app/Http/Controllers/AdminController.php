<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Admin;


class AdminController extends Controller
{
    public function index()
    {
        return view('admin.bi.dashboard');
    }

    public function logout(Request $request)
    {
        if (Auth::guard('admins')->logout()) {
            $request->session()->invalidate();
            return redirect()->route('homepage');
        } else {
            return redirect()->route('admin.dashboard');
        }
    }

    public function login()
    {
        return view('admin.auth.login');
    }

    public function postlogin(Request $request)
    {
        // validate
        $request->validate([
            'email' => 'required|email', 'password' => 'required'
        ]);

        if (Auth::guard('admins')->attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();

            return response()->json([
                'status' => true, 'message' => ucwords('Login Successfull'),
            ]);
        }
        return response()->json([
            'status' => false, 'message' => ucwords('Invalid Login'),
        ]);
    }

    public function userAccount()
    {
        $userDetails = User::all();
        return view('admin.user.viewaccount', [
            'userDetails' => $userDetails
        ]);
    }

    public function adminAccount()
    {
        $userDetails = Admin::all();
        return view('admin.user.viewadmin', [
            'userDetails' => $userDetails
        ]);
    }
}
