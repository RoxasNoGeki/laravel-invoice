<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index(){
        return view('rein.pages.index');
    }

    public function test(){
        return view('rein.pages.test');
    }

    public function signup(){
        $plans      = Plan::where('period', 1)->with(['price'])->get();
        return view('rein.pages.signup',compact('plans'));
    }

    public function signin(){
        return view('rein.pages.signin');
    }

    public function resetpw(){
        return view('rein.pages.resetpw');
    }
}
