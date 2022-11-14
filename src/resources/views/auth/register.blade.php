@extends('jv-auth::layouts.base')

@section('title', __('Cadastrar'))

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
                <p class="text-xl mb-6 text-white text-center font-titillium-semibold"><?= __('Faça cadastro') ?></p>
                <form method="POST" action="{{ route('auth.register') }}">
                    @csrf
                    
                    <div class="mb-4">
                        <x-jv-auth-input
                            id="name"
                            type="text"
                            name="name"
                            value="{{ old('name') }}"
                            label="{{ __('Nome') }}"
                        ></x-jv-auth-input>
                        @error('name')
                        <x-jv-auth-input-error message="{{ $message }}"></x-jv-auth-input-error>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <x-jv-auth-input
                            id="email"
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            label="{{ __('E-mail') }}"
                        ></x-jv-auth-input>
                        @error('email')
                            <x-jv-auth-input-error message="{{ $message }}"></x-jv-auth-input-error>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <x-jv-auth-input
                            id="password"
                            type="password"
                            name="password"
                            value="{{ old('password') }}"
                            label="{{ __('Senha') }}"
                        ></x-jv-auth-input>
                        
                        @error('password')
                            <x-jv-auth-input-error message="{{ $message }}"></x-jv-auth-input-error>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <x-jv-auth-input
                            id="password-confirm"
                            type="password"
                            name="password_confirmation"
                            value="{{ old('password_confirmation') }}"
                            label="{{ __('Confirmar senha') }}"
                        ></x-jv-auth-input>
                        
                        @error('password_confirmation')
                            <x-jv-auth-input-error message="{{ $message }}"></x-jv-auth-input-error>
                        @enderror
                    </div>

                    <div class="text-center pt-1 pb-1">
                        <x-jv-auth-btn-submit label="{{ __('Cadastrar') }}"></x-jv-auth-btn-submit>
                    </div>

                    <div class="text-center">
                        @if (Route::has('auth.login'))
                            <a class="text-white font-2xl font-titillium-semibold" href="{{ route('auth.login') }}">
                                {{ __('Já possui uma conta? Faça Login') }}
                            </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
