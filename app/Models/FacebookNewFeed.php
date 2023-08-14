<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacebookNewFeed extends Model
{
    use HasFactory;
    protected $table = 'facebook_new_feeds';
    protected $fillable = [
        "avatar",
        "username",
        "id_user",
        "time_create",
        "content",
        "hinh_anh",
        "count_react",
        "count_comment",
        "like_status"
    ];
}
