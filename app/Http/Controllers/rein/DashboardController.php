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

    public function setting(){
        return view('rein.pages.dashboard.form');
    }

    public function store(Request $request){
        $test=$request->only(['due_months']);

        $data=[
            'issuer' => $request->only(['user_firstname','user_address','user_email','user_phone']),
            'billed_to'=>$request->only(['for_firstname','for_address','for_email','for_phone']),
            'payment_option'=> $request->only(['account_name','account_number']),
            'payment_terms'=>$request->only(['penalty','due_days','due_months','notes']),
            'send_option'=> 'email',
            'repeat_in_days'=>$request->only(['due_days'])['due_days'],
            'repeat_in_months'=>$request->only(['due_months'])['due_months'],
            'due_in_days'=>12,
            'due_in_months'=>13,
            'user_id'=>Auth::user()->uuid,
            'layout'=>'DEMO'
        ];
//        return $data;
        Template::create($data);

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
