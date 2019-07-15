<?php

namespace App\Http\Controllers\rein;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Exception;

class InvoiceController extends Controller
{
    public function index(){
        return view('rein.pages.invoice.index');
    }

    public function store(Request $request){
        $test=$request->only(['due_months']);

        $data=[
            'issuer' => $request->only(['user_firstname','user_address','user_email','user_phone']),
            'billed_to'=>$request->only(['for_firstname','for_address','for_email','for_phone']),
            'payment_option'=> $request->only(['account_name','account_number']),
            'payment_terms'=>$request->only(['penalty','due_days','due_months','notes']),
            'prefix_no'=>Auth::user()->uuid,
            'send_option'=> 'email',
            'repeat_in_days'=>$request->only(['due_days'])['due_days'],
            'repeat_in_months'=>$request->only(['due_months'])['due_months'],
            'due_in_days'=>12,
            'due_in_months'=>13,
            'user_id'=>Auth::user()->uuid,
            'layout'=>'test1'
        ];
        return $data;
//        Template::create($data);

    }
}
