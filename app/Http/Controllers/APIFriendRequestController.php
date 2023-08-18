<?php

namespace App\Http\Controllers;

use App\Models\FriendRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class APIFriendRequestController extends Controller
{
    public function GetListRequest()
    {
        $userLoginID = Session::get('auth')->id;
        $list = FriendRequest::where('id_user_receive', $userLoginID)
            ->join('user_facebooks', 'user_facebooks.id', 'friend_requests.id_user_request')
            ->select('friend_requests.*', 'user_facebooks.avatar', 'user_facebooks.lastname', 'user_facebooks.firstname')
            ->get();
        return response()->json([
            'data' => $list,
        ]);
    }
}
