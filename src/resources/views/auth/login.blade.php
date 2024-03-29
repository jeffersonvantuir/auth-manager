@extends('jv-auth::layouts.base')

@section('title', __('Entrar'))

@section('content')
<section class="container-full md:h-screen grid-none grid place-content-around"
    style="
        background-repeat: no-repeat;
        background-size: cover;
        background-image: url(<?= asset(config('jv-auth-config.login_background')) ?>);"
    >
    <div class="bg-jv-auth rounded-tl-3xlg rounded-br-3xlg shadow-3xl">
    
        <div class="relative flex items-center place-content-center mb-6">
            <div class="p-4 shadow-sm bg-white w-20 rounded-lg absolute">
                <div class="flex justify-center">
                    <a href="{{ config('app.url') }}">
                        <img alt="Login logo" src="{{ asset(config('jv-auth-config.login_logo')) }}"/>
                    </a>
                </div>
            </div>
        </div>
        <div class="py-4 px-4 md:px-0 w-[80vw] md:w-80">
            <div class="md:mx-6">
                <p class="text-xl mb-6 text-white text-center font-titillium-semibold"><?= __('Faça login') ?></p>

                <form method="POST" action="{{ route('auth.login') }}">
                    @csrf
                    
                    <div class="mb-4">
                        <x-jv-auth-input
                            id="email"
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            label="{{ __('E-mail') }}"
                        ></x-jv-auth-input>
                        @isset($errors)
                            @error('email')
                                <x-jv-auth-input-error message="{{ $message }}"></x-jv-auth-input-error>
                            @enderror
                        @endisset
                    </div>
                    <div class="mb-4">
                        <x-jv-auth-input
                            id="password"
                            type="password"
                            name="password"
                            value="{{ old('password') }}"
                            label="{{ __('Senha') }}"
                        ></x-jv-auth-input>
                        @isset($errors)
                            @error('password')
                                <x-jv-auth-input-error message="{{ $message }}"></x-jv-auth-input-error>
                            @enderror
                        @endisset
                    </div>
                    <div class="mb-1 mt-5">
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label text-white font-titillium font-md" for="remember">
                            {{ __('Mantenha-me conectado') }}
                        </label>
                    </div>

                    <div class="mb-4">
                        @if (Route::has('password.request'))
                            <a class="text-white font-titillium font-md" href="{{ route('password.request') }}">
                                {{ __('Esqueceu sua senha?') }}
                            </a>
                        @endif
                    </div>

                    <div class="text-center pt-1 pb-1">
                        <x-jv-auth-btn-submit label="{{ __('Entrar') }}"></x-jv-auth-btn-submit>
                    </div>

                    <div class="text-center">
                        @if (Route::has('auth.register'))
                            <a class="text-white font-2xl font-titillium-semibold" href="{{ route('auth.register') }}">
                                {{ __('Cadastrar') }}
                            </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
