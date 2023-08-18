<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ViewController extends Controller
{
    public function newfeed()
    {
        $isLogin = Session::get('auth');
        if ($isLogin) {
            return view('client.page.index');
        } else {
            return redirect('/');
        }
    }
    public function login()
    {
        return view('client.page.authentication');
    }
    public function profile()
    {
        return view('client.page.profile');
    }
}
