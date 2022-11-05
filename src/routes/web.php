<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web']], function () {
    Route::get('/entrar', [\JeffersonVantuir\AuthManager\Http\Controllers\Auth\LoginController::class, 'login'])
    ->name('auth.login');

    Route::post('/entrar', [\JeffersonVantuir\AuthManager\Http\Controllers\Auth\LoginController::class, 'login'])
        ->name('auth.login');

    Route::post('/sair', [\JeffersonVantuir\AuthManager\Http\Controllers\Auth\LoginController::class, 'logout'])
        ->name('auth.logout');
});

