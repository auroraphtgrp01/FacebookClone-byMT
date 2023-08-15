<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FriendRequest extends Model
{
    use HasFactory;
    protected $table  = 'friend_requests';
    protected $fillable = [
        'id_user_request',
        'id_user_receive'
    ];
}
