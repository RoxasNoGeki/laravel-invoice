<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('rein.pages.index');
    }

    public function test(){
        return view('rein.pages.test');
    }

    public function signup(){
        return view('rein.pages.signup');
    }

    public function signin(){
        return view('rein.pages.signin');
    }

    public function resetpw(){
        return view('rein.pages.resetpw');
    }
}
