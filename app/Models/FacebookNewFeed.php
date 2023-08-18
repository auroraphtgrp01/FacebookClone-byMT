<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacebookNewFeed extends Model
{
    use HasFactory;
    protected $table = 'facebook_new_feeds';
    protected $fillable = [
        "id_user",
        "content",
        "id_picture",
        "count_react",
        "count_comment",
        "like_status"
    ];
}
