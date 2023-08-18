<?php

namespace App\Http\Controllers;

use App\Models\UserFacebook;
use Illuminate\Http\Request;

class APIProfileControlelr extends Controller
{
    public function getProfile(Request $request)
    {
        $profile = UserFacebook::find($request->id);
        if ($profile) {
            $userLoginID = $profile->id;
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
                'status' => 1,
                'friend' => $data,
                'user' => $profile,
                'redirect' => route('profile')
            ]);
        }
        return response()->json([
            'status' => 0,
            'message' => 'Không tìm thấy profile của người này !'

        ]);
    }
}
