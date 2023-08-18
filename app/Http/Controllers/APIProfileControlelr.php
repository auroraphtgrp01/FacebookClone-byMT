<?php

namespace App\Http\Controllers;

use App\Models\FacebookNewFeed;
use App\Models\FriendRequest;
use App\Models\PictureOfUser;
use App\Models\Relationship;
use App\Models\UserFacebook;
use Exception;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class APIProfileControlelr extends Controller
{
    public function getProfile(Request $request)
    {
        // $FRIEND = 1;
        // $REQUEST_FRIEND = 2;
        // $NOT_FRIEND = 3;
        // $FRIEND_ADD = 4;
        $profile = UserFacebook::where('username', $request->username)->first();
        if ($profile) {
            $userID = $profile->id;

            $dataNewFeed = FacebookNewFeed::join('user_facebooks', 'user_facebooks.id', 'facebook_new_feeds.id_user')
                ->join('picture_of_users', 'picture_of_users.id', 'facebook_new_feeds.id_picture')
                ->select('facebook_new_feeds.*', 'user_facebooks.firstname', 'user_facebooks.lastname', 'user_facebooks.avatar', 'user_facebooks.username', 'picture_of_users.picture')
                ->where('facebook_new_feeds.id_user', $userID)
                ->get();
            $picture = PictureOfUser::where('id_user', $userID)->get();
            $userLoginID = Session::get('auth')->id;
            $data = UserFacebook::join('relationships', function ($join) use ($userID) {
                $join->on('user_facebooks.id', '=', 'relationships.user_x')
                    ->where('relationships.user_y', '=', $userID)
                    ->orWhere(function ($query) use ($userID) {
                        $query->on('user_facebooks.id', '=', 'relationships.user_y')
                            ->where('relationships.user_x', '=', $userID);
                    });
            })
                ->select('user_facebooks.*')
                ->get();
            $check_request = FriendRequest::where('id_user_request', $userLoginID)->where('id_user_receive', $userID)->first();
            $check_add = FriendRequest::where('id_user_request', $userID)->where('id_user_receive', $userLoginID)->first();
            $check_relationship = Relationship::where(function ($query) use ($userID, $userLoginID) {
                $query->where('user_x', $userID)->where('user_y', $userLoginID)
                    ->orWhere('user_x', $userLoginID)->where('user_y', $userID);
            })
                ->exists();
            if ($userID == $userLoginID) {
                return response()->json([
                    'friend' => $data,
                    'user' => $profile,
                    'status_friend' => 0,
                    'picture' => $picture,
                    'newfeed' => $dataNewFeed,
                ]);
            }
            if ($check_relationship) {
                return response()->json([
                    'friend' => $data,
                    'user' => $profile,
                    'status_friend' => 1,
                    'picture' => $picture,
                    'newfeed' => $dataNewFeed,

                ]);
            } else if ($check_request == null && $check_add == null) {
                return response()->json([
                    'friend' => $data,
                    'user' => $profile,
                    'status_friend' => 3,
                    'picture' => $picture,
                    'newfeed' => $dataNewFeed,

                ]);
            }
            if ($check_add && $check_request == null) {
                return response()->json([
                    'friend' => $data,
                    'user' => $profile,
                    'status_friend' => 4,
                    'picture' => $picture,
                    'newfeed' => $dataNewFeed,

                ]);
            }
            if ($check_add == null && $check_request) {
                return response()->json([
                    'friend' => $data,
                    'user' => $profile,
                    'status_friend' => 2,
                    'picture' => $picture,
                    'newfeed' => $dataNewFeed,

                ]);
            }
            // if ($check == null) {
            // return response()->json([
            //     'friend' => $data,
            //     'user' => $profile,
            //     'status_friend' => 3,
            // ]);
            // }
        }
    }
    public function addFriend(Request $request)
    {
        DB::beginTransaction();
        try {
            $request_id = Session::get('auth')->id;
            $receive_id = $request['id'];
            $check = FriendRequest::where('id_user_request', $request_id)
                ->where('id_user_receive', $receive_id)->first();
            if ($check === null) {
                $request_friend = FriendRequest::create([
                    'id_user_request' => $request_id,
                    'id_user_receive' => $receive_id,
                ]);
                DB::commit();
                return response()->json([
                    'status' => 1,
                    'message' => 'Đã gửi lời mới kết bạn đến ' . $request['lastname'],
                ]);
            }
        } catch (Exception $e) {
            Log::error($e);
            DB::rollBack();
        }
    }
    public function cancelRequest(Request $request)
    {
        DB::beginTransaction();

        try {
            $request_id = Session::get('auth')->id;
            $user = UserFacebook::find($request->id);
            $check_request = FriendRequest::where('id_user_request', $request_id)
                ->where('id_user_receive', $user->id)->first();
            if ($check_request) {
                $check_request->delete();
                DB::commit();
                return response()->json([
                    'status' => 1,
                    'message' => 'Đã Huỷ Lời Mời Kết Bạn !'
                ]);
            }
        } catch (Exception $e) {
            Log::error($e);
            DB::rollBack();
            return response()->json([
                'status' => 0,
                'message' => 'Không Thể Huỷ Lời Mời Kết Bạn !'
            ]);
        }
    }
    public function removeFriend(Request $request)
    {
        DB::beginTransaction();
        try {
            $userID = $request->id;
            $userLoginID = Session::get('auth')->id;
            $check_relationship = Relationship::where(function ($query) use ($userID, $userLoginID) {
                $query->where('user_x', $userID)->where('user_y', $userLoginID)
                    ->orWhere('user_x', $userLoginID)->where('user_y', $userID);
            })
                ->first();
            if ($check_relationship) {
                $check_relationship->delete();
                DB::commit();
                return response()->json([
                    'status' => 1,
                    'message' => 'Đã huỷ kết bạn thành công !'
                ]);
            }
        } catch (Exception $e) {
            Log::error($e);
            DB::rollBack();
            return response()->json([
                'status' => 0,
                'message' => 'Đã huỷ kết bạn thành công !'
            ]);
        }
    }
    public function acceptFriend(Request $request)
    {
        DB::beginTransaction();
        try {
            $userRequest = $request->id;
            $userReceive = Session::get('auth')->id;
            $check = FriendRequest::where('id_user_request', $userRequest)->where('id_user_receive', $userReceive)->first();
            if ($check) {
                if ($userReceive && $userRequest) {
                    Relationship::create([
                        'user_x' => $userRequest,
                        'user_y' => $userReceive,
                    ]);
                    $check->delete();
                    DB::commit();
                    return response()->json([
                        'status' => 1,
                        'message' => 'Đã Chấp Nhận Lời Mời Kết Bạn'
                    ]);
                }
            }
        } catch (Exception $e) {
            Log::error($e);
            DB::rollBack();
        }
    }
}
