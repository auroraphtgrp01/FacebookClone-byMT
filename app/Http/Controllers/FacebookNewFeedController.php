<?php

namespace App\Http\Controllers;

use App\Models\FacebookNewFeed;
use App\Models\UserFacebook;
use Illuminate\Http\Request;

class FacebookNewFeedController extends Controller
{
    public function data()
    {
        $data = FacebookNewFeed::join('user_facebooks', 'user_facebooks.id', 'facebook_new_feeds.id_user')
            ->select('facebook_new_feeds.*', 'user_facebooks.firstname', 'user_facebooks.lastname', 'user_facebooks.avatar')
            ->get();
        return response()->json([
            'data' => $data
        ]);
    }
    public function dataUser()
    {
        $data = UserFacebook::all();
        return response()->json([
            'data' => $data
        ]);
    }
    public function changeReact(Request $request)
    {
        $newfeed = FacebookNewFeed::find($request->id);
        if ($newfeed) {
            if ($newfeed->like_status == 0) {
                $newfeed->like_status = 1;
            } else {
                $newfeed->like_status = 0;
            }
            $newfeed->save();
        }
    }
}
