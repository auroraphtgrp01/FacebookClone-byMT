<?php

namespace App\Http\Controllers;

use App\Models\FacebookNewFeed;
use App\Models\FriendRequest;
use App\Models\PictureOfUser;
use App\Models\Relationship;
use App\Models\UserFacebook;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class FacebookNewFeedController extends Controller
{
    public function data(Request $request)
    {
        $login = Session::get('auth');
        $data = FacebookNewFeed::join('user_facebooks', 'user_facebooks.id', 'facebook_new_feeds.id_user')
            ->join('picture_of_users', 'picture_of_users.id', 'facebook_new_feeds.id_picture')
            ->select('facebook_new_feeds.*', 'user_facebooks.firstname', 'user_facebooks.lastname', 'user_facebooks.avatar', 'user_facebooks.username', 'picture_of_users.picture')
            ->orderBy('created_at', 'desc')->get();

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
                $newfeed->count_react--;
            } else {
                $newfeed->like_status = 0;
                $newfeed->count_react++;
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
    public function uploadFile(Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $path = 'uploads_client';
            $extension = $file->getClientOriginalExtension();
            $fileName = Str::uuid() . '.' . $extension;
            $file->move(public_path($path), $fileName); //
            $imagePath = $path . '/' . $fileName;
            return response()->json(['path' => $imagePath]);
        } else {
            return response()->json(['message' => 'No file provided'], 400);
        }
    }
    public function uploadStatus(Request $request)
    {
        DB::beginTransaction();
        try {
            $idUser = $request->id_user;
            $content = '<p> ' . $request->content . ' </p>';
            if ($request->picture != '') {
                $picture = PictureOfUser::create([
                    'id_user' => $idUser,
                    'picture' => $request->picture
                ]);
                $newfeed = FacebookNewFeed::create([
                    'id_user' => $idUser,
                    'id_picture' => $picture->id,
                    'content' => $content,
                ]);
            } else {
                $picture = PictureOfUser::create([
                    'id_user' => $idUser,
                    'picture' => '',
                ]);
                $newfeed = FacebookNewFeed::create([
                    'id_user' => $idUser,
                    'content' => $content,
                    'id_picture' => $picture->id,
                ]);
            }

            DB::commit();
            return response()->json([
                'status' => 1,
                'message' => 'Đã đăng status mới thành công !'
            ]);
        } catch (Exception $e) {
            Log::error($e);
            DB::rollBack();
            return response()->json([
                'status' => 0,
                'message' => 'Thất Bại !'
            ]);
        }
    }
    public function cancelStatus(Request $request)
    {
        if ($request->file != null) {
            $filePath = public_path($request->file);
            if (file_exists($filePath)) {
                unlink($filePath);
                return response()->json([
                    'status' => 1,
                ]);
            } else {
                return response()->json([
                    'status' => 2,
                ]);
            }
        } else {
            return response()->json([
                'status' => 2,
            ]);
        }
    }
    public function logout(Request $request)
    {
        session()->forget('auth');
        return response()->json([
            'status' => 1,
            'redirect' => route('homepage'),
            'message' =>  'Đã Đăng Xuất Thành Công !'
        ]);
    }
    public function deleteStatus(Request $request)
    {
        DB::beginTransaction();
        try {
            $login = Session::get('auth')->id;
            $newFeed = FacebookNewFeed::find($request->id);
            if ($newFeed && $newFeed->id_user == $login) {
                $id_picture = $newFeed->id_picture;
                $picture = PictureOfUser::find($id_picture);
                if ($picture) {
                    $picture->delete();
                }
                $newFeed->delete();
                DB::commit();
                return response()->json([
                    'status' => 1,
                    'message' => 'Đã xoá thành công bài viết !'
                ]);
            }
        } catch (Exception $e) {
            Log::error($e);
            DB::rollBack();
            return response()->json([
                'status' => 0,
                'message' => 'Thất bại !' . $e
            ]);
        }
    }
}
