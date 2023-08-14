<?php

namespace App\Http\Controllers;

use App\Models\FacebookNewFeed;
use Illuminate\Http\Request;

class FacebookNewFeedController extends Controller
{
    public function data()
    {
        $data = FacebookNewFeed::all();
        return response()->json([
            'data' => $data
        ]);
    }
}
