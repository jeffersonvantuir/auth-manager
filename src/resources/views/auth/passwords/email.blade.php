@extends('layouts.base')

@section('title', 'Recuperar de senha')

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
                        <p class="text-xl mb-6 text-white text-center font-titillium-semibold">{{ __('Recuperar senha') }}</p>

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="mb-4">
                                <input-component 
                                    id="email"
                                    type="email"
                                    name="email"
                                    label="{{ __('E-mail') }}"
                                    value="{{ old('email') }}"
                                    has-error=@error('email') 1 @enderror
                                ></input-component>
                                @error('email')
                                    <input-error-component message="{{ $message }}"></input-error-component>
                                @enderror
                            </div>
                            
                            <div class="text-center pt-1 pb-1">
                                <btn-submit-component label="{{ __('Enviar link de recuperação') }}"></btn-submit-component>
                            </div>

                            <div class="text-center">
                                @if (Route::has('login'))
                                    <a class="text-white font-2xl font-titillium-semibold" href="{{ route('login') }}">
                                        {{ __('Entrar na conta') }}
                                    </a>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
@endsection
