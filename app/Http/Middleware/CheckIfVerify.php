<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\Auth;

class CheckIfVerify
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Check If account is verify
        $account = Auth::guard('users');

        // dd($account->user());

        if (!is_null($account->user()) && (is_null($account->user()->is_verify) || $account->user()->is_verify == 0)) {
            $account->logout();
            $request->session()->invalidate();
            return redirect()->route('account.notverify');
        }

        return $next($request);
    }
}
