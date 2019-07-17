<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
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
        $this->validate($request, [
            'name' => 'required',
            'username' => 'required',
            'password' => 'required'
        ]);
        try {
            $data = $request->only(['username', 'name', 'password']);
            $data['username'] = str_replace('-', '', $data['username']);
            $user = User::create($data);
            $subs = Subscription::create(['plan_id'=>$request->get('plan_id'),'user_id'=> $user->uuid]);
        } catch (Exception $e) {
            return redirect(route('signup'))->withErrors(['username' => 'Username Has Been Taken']);
        }

        return redirect()->route('verify', ['username' => $user->username])->with('reset', 'no');

    }

    public function resetingpw(Request $request)
    {

        try {
            $data = $request->only(['username']);
            $data['username'] = str_replace('-', '', $data['username']);
            $user = User::where('username', $data['username'])->firstorfail();
        } catch (Exception $e) {
            return redirect(route('resetpw'))->withErrors(['username' => 'your username is invalid'])->withInput($request->input());
        }

        return redirect()->route('verify', ['username' => $user->username])->with('reset', 'yes');
    }

    public function signingin(Request $request)
    {
        try {
            $data = $request->only(['username', 'password']);
            $data['username'] = str_replace('-', '', $data['username']);
            $user = User::where('username', $data['username'])->firstorfail();
        } catch (Exception $e) {
            return redirect(route('signin'))->withErrors(['username' => 'your username or password invalid'])->withInput($request->input());
        }
        try {
            $user->authenticate($data['password']);
        } catch (Exception $e) {
            if (isset($e->errors()['user_id'])) {
                return redirect(route('signin'))->withErrors(['username' => 'your account is unverified. Click <a href="' . route('verify', ['username' => $user->username]) . '" >here</a>']);
            }
            return redirect(route('signin'))->withErrors(['username' => 'your username or password invalid'])->withInput($request->input());
        }
        Auth::login($user);
        $test = Auth::user();
        return redirect()->intended(route('dashboard'));

    }




    public function verify(Request $request, $username)
    {
        $data=User::where('username',$username)->first();
        if(!$data['username_verified_at']){
            return view('rein.pages.verify', compact('username'));
        }else{
            return redirect()->back()->withErrors(['username' => 'Your Account Has Already Been Activated']);
        }
    }

    public function verifying(Request $request)
    {
        $reset = $request->only(['reset']);
        $data = $request->only(['username']);
        $data['username'] = str_replace('-', '', $data['username']);


        if ($reset['reset'] == "no") {
            try {
                $when = Carbon::parse('now');
                $user = User::where('username', $data['username'])->firstorfail();
                $user->username_verified_at = $when;
                $user->save();
            } catch (Exception $e) {
                return redirect(route('verify'))->withErrors(['username' => 'your username or token invalid'])->withInput($request->input());
            }
            return redirect()->route('signin')->with('status', 'Your Account Has Been Activated');
        } elseif($reset['reset']=="yes") {
            $user = User::where('username', $data['username'])->first();
            Auth::login($user);
            return redirect()->route('changepw')->with('username', $data);
        }


    }


}
