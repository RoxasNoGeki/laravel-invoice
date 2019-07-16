<?php

namespace App\Http\Controllers\rein;

use App\Models\History;
use App\Models\Template;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Exception;

class InvoiceController extends Controller
{
    public function index()
    {
        $data = Template::where('user_id', Auth::user()->uuid);
        $data = $data->with(['history'])->get();
        return view('rein.pages.invoice.index', compact('data'));
    }

    public function setting()
    {
        $data = Template::where('user_id', Auth::user()->uuid)->firstorfail();
        return view('rein.pages.invoice.form', compact('data'));
    }

    public function create(Request $request)
    {
        $data = [
            'no' => $request->only(['prefix_no'])['prefix_no'],
            'issued_at' => Carbon::now(),
            'due_at' => Carbon::tomorrow(),
            'billed_to' => $request->only(['for_firstname','for_address','for_email','for_phone']),
            'issuer' => $request->only(['user_firstname','user_address','user_email','user_phone']),
            'lines' => $request->only(['qty','product','disc','desc','price']),
            'payment_option' => $request->only(['account_name','account_number']),
            'payment_terms' => $request->only(['penalty','due_days','due_months','notes']),
            'is_send' => 0
        ];
        $invoice = History::create($data);
        return redirect(route('invoice'));
//        return $data;
    }

    public function view($id){
        $data=History::where('id',$id)->firstorfail();

        return view('rein.pages.invoice.invoice',compact('data'));
    }


}
