<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web']], function () {
    Route::get(config('jv-auth-config.login_route'), [\JeffersonVantuir\AuthManager\Http\Controllers\Auth\LoginController::class, 'login'])
        ->name('auth.login');

    Route::post(config('jv-auth-config.login_route'), [\JeffersonVantuir\AuthManager\Http\Controllers\Auth\LoginController::class, 'login'])
        ->name('auth.login');

    Route::post('/sair', [\JeffersonVantuir\AuthManager\Http\Controllers\Auth\LoginController::class, 'logout'])
        ->name('auth.logout');

    if (config('jv-auth-config.allow_external_register_route')) {
        Route::get(config('jv-auth-config.register_route'), [\JeffersonVantuir\AuthManager\Http\Controllers\Auth\RegisterController::class, 'register'])
            ->name('auth.register');

        Route::post(config('jv-auth-config.register_route'), [\JeffersonVantuir\AuthManager\Http\Controllers\Auth\RegisterController::class, 'register'])
            ->name('auth.register');
    }
});

