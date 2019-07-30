<?php

namespace App\Http\Controllers\rein;
use App\Models\Template;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Exception;
use Carbon\Carbon;
use Validator;


class DashboardController extends Controller
{
    public function index(){
        // $data['total_org'] = Organization::where('user_id', Auth::user()->uuid)->count();
        $data['total_sub'] = Template::where('user_id', Auth::user()->uuid)->count();

        $dt['persenan']  = $this->indicator($data);
        $dt['step']      = $this->step();
        $dt['title']     = 'Howdy, '.Auth::user()->name;
        $dt['subtitle']  = 'Selamat datang di BASIL. Untuk memulai ikuti langkah berikut';

        return view('rein.pages.dashboard.index',compact('dt'));
//        return $data;
    }

    private function indicator($attr){
        // $rules['total_org'] = ['min:1'];
        $rules['total_sub'] = ['min:1'];
        $total  = count($rules);
        $complt = $total;

//        $validator  = Validator::make($attr, $rules);
//        if ($validator->fails()){
//            $complt = $complt - count($validator->messages());
//        }
//        $percentage = floor(($complt / max($total, 1)) * 100);

        if ($attr['total_sub']<1){
            $complt = $complt - 1;
            $percentage = 0;
        }else{
            $percentage=100;
        }


        return $percentage;
    }

    private function step(){
        $dt[0]  = ['content' => 'Buat Template Invoice Anda', 'action' => route('setting')];
        return $dt;
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
