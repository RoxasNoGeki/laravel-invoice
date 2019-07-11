<?php

namespace App\Http\Controllers\rein;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Exception;

class DashboardController extends Controller
{
    public function index(){
        return view('rein.pages.dashboard.index');
    }

    public function changepw(){
        return view('rein.pages.changepw');
    }

    public function invoice(){
        return view('rein.pages.dashboard.invoice');
    }

    public function form(){
        return view('rein.pages.dashboard.form');
    }

    public function advance(){
        return view('rein.pages.dashboard.advance');
    }

    public function changingpw(Request $request){
        $data   = $request->only(['password']);
        $user   = User::where('username',Auth::user()->username)->first();
        try{
            $user->password=$data['password'];
            $user->save();
        }catch (Exception $e){
            return $e;
        }
        Auth::logout();
        return redirect(route('signin'))->with('status','Your Password Has Been Changed');
    }

}
