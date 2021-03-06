<?php

namespace xixha;

use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use AuthenticatableTrait; 

    protected $table = 'users';
 
    protected $primaryKey = 'id';

    protected $fillable = [
        'name', 'email', 'password', 'remember_token', 'token_api','is_admin',
    ];

    protected $hidden = [
        'password', 'remember_token','token_api',
    ];
} 
