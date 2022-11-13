<?php

namespace JeffersonVantuir\AuthManager\Http\Controllers\Auth;

use Flasher\Prime\Notification\NotificationInterface;
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
            $validateMessages = [
                'email.required' => __('E-mail é obrigatório'),
                'email.email' => __('E-mail inválido'),
                'password.required' => __('Senha é obrigatória'),
            ];
            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ], $validateMessages);
     
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
     
                return redirect()->intended(config('jv-auth-config.success_login_redirect', 'home'));
            }

            toastr(__('Credenciais não encontradas'), NotificationInterface::ERROR);

            return back()->onlyInput('email');
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
