<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Auth;

class user extends Auth
{
    use HasFactory;

    protected $fillable = [
        'username',
        'email',
        'password',
        'first_name',
        'last_name',
        'contact_number',
        'address',
        'status',
        'user_type_id'
    ];
}
