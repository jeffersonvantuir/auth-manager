<?php

namespace JeffersonVantuir\AuthManager\Http\Controllers\Auth;

use JeffersonVantuir\AuthManager\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')
            ->except('logout');
    }

    public function login(Request $request)
    {
        if ($request->isMethod(Request::METHOD_POST)) {
            $credentials = $request->validate([
                'usuario' => ['required', 'email'],
                'password' => ['required'],
            ]);
     
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
     
                return redirect()->intended(config('jv-auth-config.success_login_redirect', 'home'));
            }

            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->onlyInput('email');
        }

        return view('jv-auth::auth.login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(config('jv-auth-config.logout_redirect', '/'));
    }
}
