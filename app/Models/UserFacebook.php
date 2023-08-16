<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserFacebook extends Model
{
    use HasFactory;
    protected $table = 'user_facebooks';
    protected $fillable = [
        'firstname',
        'lastname',
        'username',
        'password',
        'email',
        'phone',
        'dateofbirth',
        'about',
        'count_follow',
        'avatar',
    ];
}
