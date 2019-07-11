<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;

use App\Models\User;

use Firebase\JWT\JWT;
use Auth;

class AuthController extends Controller
{

    public function signingup(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'username' => 'required',
            'password'=> 'required'
        ]);
        try {
            $data   = $request->only(['username', 'name', 'password']);
            $user 	= User::create($data);
        } catch (Exception $e) {
            return redirect(route('signup'))->withErrors(['username' => 'Username Has Been Taken']);
        }

        return redirect()->route('verify',['username'=>$user->username])->with('reset','no');

    }

    public function resetingpw(Request $request){

        try {
            $data   = $request->only(['username']);
            $user 	= User::where('username',$data['username'])->firstorfail();
        } catch (Exception $e) {
            return redirect(route('resetpw'))->withErrors(['username' => 'your username is invalid'])->withInput($request->input());
        }

        return redirect()->route('verify',['username'=>$user->username])->with('reset','yes');
    }

    public function signingin(Request $request){
        try {
            $data   = $request->only(['username', 'password']);
            $user 	= User::where('username', $data['username'])->firstorfail();
        } catch (Exception $e) {
            return redirect(route('signin'))->withErrors(['username' => 'your username or password invalid'])->withInput($request->input());
        }
        try {
            $user->authenticate($data['password']);
        } catch (Exception $e) {
            if(isset($e->errors()['user_id'])){
                return redirect(route('signin'))->withErrors(['username' => 'your account is unverified. Click <a href="'.route('verify', ['username' => $user->username]).'" >here</a>']);
            }
            return redirect(route('signin'))->withErrors(['username' => 'your username or password invalid'])->withInput($request->input());
        }
        Auth::login($user);
        $test=Auth::user();
        return redirect()->intended(route('dashboard'));

    }

    public function signout(){
        Auth::logout();
        return redirect(route('signin'));
    }


    public function verify(Request $request, $username){

        return view('rein.pages.verify', compact('username'));
    }

    public function verifying(Request $request){
       $reset = $request->only(['reset']);
       $data = $request->only(['username']);

        if($reset=='no'){
        try{
            $when = Carbon::parse('now');
            $user = User::where('username',$data['username'])->firstorfail();
            $user->username_verified_at = $when;
            $user->save();
        } catch (Exception $e) {
            return redirect(route('verify'))->withErrors(['username' => 'your username or token invalid'])->withInput($request->input());
        }
        return redirect()->route('signin')->with('status','Your Account Has Been Activated');
    }else{
            $user= User::where('username',$data['username'])->first();
            Auth::login($user);
            return redirect()->route('changepw')->with('username',$data);
       }

    }


}
