<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PictureOfUser extends Model
{
    use HasFactory;
    protected $table = 'picture_of_users';
    protected $fillable = [
        'id_user',
        'picture'
    ];
}
