<?php

namespace JeffersonVantuir\AuthManager\Http\Controllers\Auth;

use JeffersonVantuir\AuthManager\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\JsonResponse;

class RegisterController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function register(Request $request)
    {
        if ($request->isMethod(Request::METHOD_POST)) {

            $this->validator($request->all())
                ->validate();

            event(new Registered($user = $this->create($request->all())));
    
            Auth::guard()->login($user);
    
            if ($response = $this->registered($request, $user)) {
                return $response;
            }
    
            return $request->wantsJson()
                ? new JsonResponse([], 201)
                : redirect(config('jv-auth-config.success_login_redirect'));
        }

        return view('jv-auth::auth.register');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $validations = [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ];

        $validationsMessages = [
            'required' => __('Campo obrigatório.'),
            'name.max' => __('Nome pode ter no máximo 255 caracteres.'),
            'email.email' => __('E-mail inválido.'),
            'email.unique' => __('E-mail já está em uso no sistema.'),
            'password.min' => __('Senha precisa ter no mínimo 8 caracteres.'),
            'password.confirmed' => __('Campo Senha e Confirmar senha não correspondem.')
        ];

        return Validator::make($data, $validations, $validationsMessages);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
