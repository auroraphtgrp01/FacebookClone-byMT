<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return view('client.page.test1');
    }
    public function index1()
    {
        return view('client.page.authentication');
    }
}
