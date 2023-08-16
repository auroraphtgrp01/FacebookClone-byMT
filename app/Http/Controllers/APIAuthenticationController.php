<?php

namespace App\Http\Controllers;

use App\Models\UserFacebook;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class APIAuthenticationController extends Controller
{
    public function createUserName($s)
    {
        $clean = preg_replace('/[^a-zA-Z0-9]/', '', $s);
        $randomNumbers = '';
        for ($i = 0; $i < 4; $i++) {
            $randomNumbers .= rand(0, 9);
        }
        $result = strtolower($clean) . $randomNumbers;
        return $result;
    }

    public function login(Request $request)
    {
        $auth = UserFacebook::where('email', $request->email)->first();
        if ($auth) {
            $passwordIn = $request->password;
            $passwordData = $auth->password;
            if (password_verify($passwordIn, $passwordData)) {
                Session::start();
                Session::put('auth', $auth);
                return response()->json([
                    'status' => 1,
                    'redirect' => route('newfeedPage'),
                    'message' => 'Đăng Nhập Thành Công !'
                ]);
            } else {
                return response()->json([
                    'status' => 0,
                    'message' => 'Tài Khoản Hoặc Mật Khẩu Không Đúng !'
                ]);
            }
        } else {
            return response()->json([
                'status' => 0,
                'message' => 'Tài Khoản Hoặc Mật Khẩu Không Đúng !'
            ]);
        }
    }
    public function register(Request $request)
    {
        $auth = $request->all();
        DB::beginTransaction();
        try {
            $avatar = '/assets/img/avatar_default.png';
            $username = $this->createUserName($auth['lastname']);
            $password = bcrypt($auth['password']);
            $auth_create = UserFacebook::create([
                'firstname'             => $auth['firstname'],
                'lastname'              => $auth['lastname'],
                'username'              => $username,
                'password'              => $password,
                'email'                 => $auth['email'],
                'phone'                 => $auth['phone'],
                'dateofbirth'           => $auth['dateofbirth'],
                'about'                 => '',
                'avatar'                => $avatar,
            ]);
            $auth_create->save();
            DB::commit();
            return response()->json([
                'status' => 1,
                'message' => 'Đã tạo tài khoản thành công !'
            ]);
        } catch (Exception $e) {
            Log::error($e);
            DB::rollBack();
            return response()->json([
                'status' => 0,
                'message' => 'Có lỗi khi tạo tài khoản !'
            ]);
        }
    }
}
