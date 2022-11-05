<?php

namespace JeffersonVantuir\AuthManager\Models;

use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Notifications\Notifiable;

class User implements CanResetPassword
{
    use Notifiable;
}