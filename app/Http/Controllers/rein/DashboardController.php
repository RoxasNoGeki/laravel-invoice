<?php

namespace App\Http\Controllers\rein;
use App\Models\Template;
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



    public function advance(){
        return view('rein.pages.dashboard.advance');
    }

    public function tables(){
        return view('rein.pages.dashboard.tables');
    }

    public function Dtables(){
        return view('rein.pages.dashboard.tables_dynamic');
    }

    public function test(Request $request){
        $data=$request->only(['username']);
        return str_replace('-','',$data);
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
    public function logout()
    {
        Auth::logout();
        return redirect(route('signin'));
    }

}
