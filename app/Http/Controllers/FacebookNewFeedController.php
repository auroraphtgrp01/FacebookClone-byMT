<?php

namespace App\Http\Controllers;

use App\Models\FacebookNewFeed;
use App\Models\FriendRequest;
use App\Models\Relationship;
use App\Models\UserFacebook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FacebookNewFeedController extends Controller
{
    public function data(Request $request)
    {
        $login = Session::get('auth');
        $data = FacebookNewFeed::join('user_facebooks', 'user_facebooks.id', 'facebook_new_feeds.id_user')
            ->select('facebook_new_feeds.*', 'user_facebooks.firstname', 'user_facebooks.lastname', 'user_facebooks.avatar')
            ->get();
        return response()->json([
            'data' => $data,
            'user' => $login,
        ]);
    }
    public function dataUser()
    {
        $userLoginID =  Session::get('auth')->id;
        $data = UserFacebook::join('relationships', function ($join) use ($userLoginID) {
            $join->on('user_facebooks.id', '=', 'relationships.user_x')
                ->where('relationships.user_y', '=', $userLoginID)
                ->orWhere(function ($query) use ($userLoginID) {
                    $query->on('user_facebooks.id', '=', 'relationships.user_y')
                        ->where('relationships.user_x', '=', $userLoginID);
                });
        })
            ->select('user_facebooks.*')
            ->get();
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
    public function acceptFriend(Request $request)
    {
        $requestFr = FriendRequest::find($request->id);
        if ($requestFr) {
            $userRequest = UserFacebook::find($requestFr['id_user_request']);
            $userReceive = UserFacebook::find($requestFr['id_user_receive'])->id;
            if ($userReceive && $userRequest) {
                $relationship = Relationship::create([
                    'user_x' => $userRequest->id,
                    'user_y' => $userReceive,
                ]);
                $relationship->save();
                $requestFr->delete();
                return response()->json([
                    'status' => 1,
                    'message' => 'Đã Chấp Nhận Lời Mời Kết Bạn Của ' . $userRequest->lastname
                ]);
            }
        }
    }
    public function refuseFriend(Request $request)
    {
        $requestFr = FriendRequest::find($request->id);
        if ($requestFr) {
            $requestFr->delete();
            return response()->json([
                'status' => 1,
                'message' => 'Đã Từ Chối Lời Mời Kết Bạn !'
            ]);
        } else {
            return response()->json([
                'status' => 0,
                'message' => 'Có Lỗi Trong Quá Trình Xử Lý !'
            ]);
        }
    }
    public function uploadStatus(Request $request)
    {
        $file = $request->file('file');
        dd($file);
    }
    public function logout(Request $request)
    {
        session()->forget('auth');
        return response()->json([
            'status' => 1,
            'redirect' => route('homepage'),
            'messag' =>  'Đã Đăng Xuất Thành Công !'
        ]);
    }
}
