<?php

namespace App\Http\Controllers\rein;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('rein.pages.dashboard');
    }

}
