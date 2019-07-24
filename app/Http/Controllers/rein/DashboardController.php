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


        if($request->optionsRadios=='fixed'){
            /*/
            1 = daily/weekly
            2 = monthly
            /*/
            if($request->sendOption==1){
                $data=[
                    'issuer' => $request->only(['user_name','user_address','user_email','user_phone']),
                    'billed_to'=>$request->only(['for_name','for_address','for_email','for_phone']),
                    'payment_option'=> $request->only(['payment_option','account_name','account_number']),
                    'payment_terms'=>$request->only(['optionsRadios','sendOption','penalty','notes']),
                    'send_option'=> $request->only(['send_option'])['send_option'],
                    'repeat_in_days'=> $request->only(['day'])['day'],
                    'user_id'=>Auth::user()->uuid,
                    'layout'=>$request->only(['layout'])['layout']
                ];
            }else{
                $data=[
                    'issuer' => $request->only(['user_name','user_address','user_email','user_phone']),
                    'billed_to'=>$request->only(['for_name','for_address','for_email','for_phone']),
                    'payment_option'=> $request->only(['payment_option','account_name','account_number']),
                    'payment_terms'=>$request->only(['optionsRadios','sendOption','penalty','notes']),
                    'send_option'=> $request->only(['send_option'])['send_option'],
                    'repeat_in_months'=> $request->only(['repeat'])['repeat'],
                    'user_id'=>Auth::user()->uuid,
                    'layout'=>$request->only(['layout'])['layout']
                ];
            }
        }else if($request->optionsRadios=='nonfixed'){
            if($request->sendOption==1){
                $data=[
                    'issuer' => $request->only(['user_name','user_address','user_email','user_phone']),
                    'billed_to'=>$request->only(['for_name','for_address','for_email','for_phone']),
                    'payment_option'=> $request->only(['payment_option','account_name','account_number']),
                    'payment_terms'=>$request->only(['optionsRadios','sendOption','penalty','notes']),
                    'send_option'=> $request->only(['send_option'])['send_option'],
                    'due_in_days'=> $request->only(['due'])['due'],
                    'user_id'=>Auth::user()->uuid,
                    'layout'=>$request->only(['layout'])['layout']
                ];
            }else{
                $data=[
                    'issuer' => $request->only(['user_name','user_address','user_email','user_phone']),
                    'billed_to'=>$request->only(['for_name','for_address','for_email','for_phone']),
                    'payment_option'=> $request->only(['payment_option','account_name','account_number']),
                    'payment_terms'=>$request->only(['optionsRadios','sendOption','penalty','notes']),
                    'send_option'=> $request->only(['send_option'])['send_option'],
                    'due_in_months'=> $request->only(['due'])['due'],
                    'user_id'=>Auth::user()->uuid,
                    'layout'=>$request->only(['layout'])['layout']
                ];
            }
        }

        Template::create($data);
        return redirect(route('invoice'));
//        return $data;
        //scheduler -> cron(untuk server)
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
