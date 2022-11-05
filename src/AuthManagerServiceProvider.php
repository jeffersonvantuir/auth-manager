<?php

namespace JeffersonVantuir\AuthManager;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use JeffersonVantuir\AuthManager\View\Components\Auth\BtnSubmit;
use JeffersonVantuir\AuthManager\View\Components\Auth\Input;

class AuthManagerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'jv-auth');
        
        $this->loadViewComponentsAs('jv-auth', [
            Input::class
        ]);

        Blade::component('jv-auth-input', Input::class);
        Blade::component('jv-btn-submit', BtnSubmit::class);

        $this->publishes([
            __DIR__ . '/resources/css' => public_path('jeffersonvantuir/auth-manager/css'),
            __DIR__ . '/resources/css-variables/' => public_path(''),
            __DIR__ . '/resources/js' => public_path('jeffersonvantuir/auth-manager/js'),
            __DIR__ . '/resources/images' => public_path('jeffersonvantuir/auth-manager/images'),
            __DIR__ . '/config' => config_path('')
        ], 'jv-auth');
    }

    public function register()
    {
        
    }
}