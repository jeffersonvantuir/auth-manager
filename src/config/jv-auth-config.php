<?php

return [
    'login_logo' => env('JV_AUTH_LOGIN_LOGO_PATH', 'jeffersonvantuir/auth-manager/images/login-logo.png'),
    'login_background' => env('JV_AUTH_LOGIN_BACKGROUND_PATH', 'jeffersonvantuir/auth-manager/images/background-login.png'),
    'success_login_redirect' => env('JV_AUTH_SUCCESS_LOGIN_REDIRECT', 'home'),
    'logout_redirect' => env('JV_AUTH_LOGOUT_REDIRECT', '/'),
];