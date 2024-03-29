@extends('layouts.base')

@section('title', 'Redefinir de senha')

@section('content')
<section class="bg-login container-full h-full gradient-form md:h-screen grid grid-cols-12">
    <div class="flex items-center content-center place-content-center col-span-12">
        <div class="xl:w-6/6">
            <div class="block bg-jv-primary shadow-lg rounded-tl-3xlg rounded-br-3xlg shadow-3xl shadow-[#0000007a]">
           
                <div class="flex justify-center mb-10">
                    <div class="relative flex items-center place-content-center">
                        <div class="p-4 shadow-sm bg-white w-20 h-20 rounded-lg absolute">
                            <div class="flex justify-center">
                                <a href="{{ route('welcome') }}">
                                    <img class="w-8 h-12" src="{{ asset('images/only-logo.png') }}"/>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="py-4 lg:w-12/12 px-4 md:px-0">
                    <div class="md:p-12 md:mx-6">
                        <p class="text-xl mb-6 text-white text-center font-titillium-semibold">{{ __('Redefinir senha') }}</p>

                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="mb-4">
                                <input-component
                                    id="email"
                                    type="hidden"
                                    name="email"
                                    value="{{ app('request')->input('email') }}"
                                    has-error=@error('email') 1 @enderror
                                ></input-component>
                            </div>
                            
                            <div class="mb-4">
                                <input-component 
                                    id="password"
                                    type="password"
                                    name="password"
                                    label="{{ __('Nova senha') }}"
                                    has-error=@error('password') 1 @enderror
                                ></input-component>
                                @error('email')
                                    <input-error-component message="{{ $message }}"></input-error-component>
                                @enderror
                                @error('password')
                                    <input-error-component message="{{ $message }}"></input-error-component>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <input-component 
                                    id="password-confirm"
                                    type="password"
                                    name="password_confirmation"
                                    label="{{ __('Confirmar senha') }}"
                                    has-error=@error('password_confirmation') 1 @enderror
                                ></input-component>
                                
                                @error('password_confirmation')
                                    <input-error-component message="{{ $message }}"></input-error-component>
                                @enderror
                            </div>

                            <div class="text-center pt-1 pb-1">
                                <btn-submit-component label="Redefinir"></btn-submit-component>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
@endsection
