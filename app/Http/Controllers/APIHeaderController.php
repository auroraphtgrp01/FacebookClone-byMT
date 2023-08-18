<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class APIHeaderController extends Controller
{
    public function header_data()
    {
        $login = Session::get('auth');
        if ($login) {
            return response()->json([
                'data' => $login
            ]);
        }
    }
}
