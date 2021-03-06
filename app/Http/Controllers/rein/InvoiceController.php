<?php

namespace App\Http\Controllers\rein;

use App\Models\History;
use App\Models\Template;
use PDF;
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

    public function template()
    {
        $data = Template::where('user_id', Auth::user()->uuid)->get();
        return view('rein.pages.invoice.template', compact('data'));
    }

    public function setting($id)
    {
        $query = ['id' => $id,
            'user_id' => Auth::user()->uuid
        ];

        $data = Template::where($query)->firstorfail();

        return view('rein.pages.invoice.form', compact('data'));
    }

    public function edit($id)
    {
        $query = ['id' => $id,
            'user_id' => Auth::user()->uuid
        ];

        $data = Template::where($query)->firstorfail();
        return view('rein.pages.invoice.edit', compact('data'));
    }

    public function editing(Request $request)
    {
        $template = Template::where('prefix_no', $request->prefix_no)->firstorfail();
        $data=$template;
        $data['issuer'] = $request->only(['user_name', 'user_address', 'user_email', 'user_phone']);
        $data['billed_to'] = $request->only(['for_name', 'for_address', 'for_email', 'for_phone']);
        $data['payment_terms'] = $request->only(['optionsRadios', 'sendOption', 'penalty', 'notes']);
        $data['payment_option'] = $request->only(['payment_option', 'account_name', 'account_number']);
        $data['layout'] = $request->only(['layout'])['layout'];

        if ($request->optionsRadios == 'fixed') {
            /*/
            1 = daily/weekly
            2 = monthly
            /*/
            if ($request->sendOption == 1) {
                $data['repeat_in_days'] = $request->only(['day'])['day'];
            } else {
                $data['repeat_in_months'] = $request->only(['repeat'])['repeat'];
            }
        } else if ($request->optionsRadios == 'nonfixed') {
            if ($request->sendOption == 1) {
                $data['due_in_days'] = $request->only(['due'])['due'];
            } else {
                $data['due_in_months'] = $request->only(['due'])['due'];
            }
        }
        $template=$data;
        $template->save();

        return redirect(route('template'))->with('status', 'Your data has been edited');

    }


    public function create(Request $request)
    {
        /*/

        Fixed + Daily = hitung per hari
        Fixed + monthly = hitung per tanggal

        non-fixed + daily = now + addDays
        non-fixed + monthly = now + add months


        /*/


        if ($request->optionsRadios == 'fixed') {

            if ($request->sendOption == '1') {
                $data = [
                    'no' => $request->only(['prefix_no'])['prefix_no'],
                    'issued_at' => Carbon::now(),
                    'due_at' => Carbon::now()->modify($request->day)->addWeek(),
                    'billed_to' => $request->only(['for_name', 'for_address', 'for_email', 'for_phone']),
                    'issuer' => $request->only(['user_name', 'user_address', 'user_email', 'user_phone']),
                    'lines' => [
                        'item' => $request->only(['qty', 'product', 'disc', 'desc', 'price']),
                    ],
                    'payment_option' => $request->only(['account_name', 'account_number']),
                    'payment_terms' => $request->only(['penalty', 'day', 'optionsRadios', 'sendOption', 'notes']),
                    'is_send' => 0
                ];

            } else {
                $data = [
                    'no' => $request->only(['prefix_no'])['prefix_no'],
                    'issued_at' => Carbon::now(),
                    'due_at' => Carbon::now()->day($request->repeat)->addMonthNoOverflow(),
                    'billed_to' => $request->only(['for_name', 'for_address', 'for_email', 'for_phone']),
                    'issuer' => $request->only(['user_name', 'user_address', 'user_email', 'user_phone']),
                    'lines' => [
                        'item' => $request->only(['qty', 'product', 'disc', 'desc', 'price']),
                    ],
                    'payment_option' => $request->only(['account_name', 'account_number']),
                    'payment_terms' => $request->only(['penalty', 'repeat', 'optionsRadios', 'sendOption', 'notes']),
                    'is_send' => 0
                ];

            }
        } else {
            if ($request->sendOption == '1') {
                $data = [
                    'no' => $request->only(['prefix_no'])['prefix_no'],
                    'issued_at' => Carbon::now(),
                    'due_at' => Carbon::now()->addDays($request->due),
                    'billed_to' => $request->only(['for_name', 'for_address', 'for_email', 'for_phone']),
                    'issuer' => $request->only(['user_name', 'user_address', 'user_email', 'user_phone']),
                    'lines' => [
                        'item' => $request->only(['qty', 'product', 'disc', 'desc', 'price']),
                    ],
                    'payment_option' => $request->only(['account_name', 'account_number']),
                    'payment_terms' => $request->only(['penalty', 'due', 'optionsRadios', 'sendOption', 'notes']),
                    'is_send' => 0
                ];

            } else {
                $data = [
                    'no' => $request->only(['prefix_no'])['prefix_no'],
                    'issued_at' => Carbon::now(),
                    'due_at' => Carbon::now()->addMonths($request->due),
                    'billed_to' => $request->only(['for_name', 'for_address', 'for_email', 'for_phone']),
                    'issuer' => $request->only(['user_name', 'user_address', 'user_email', 'user_phone']),
                    'lines' => [
                        'item' => $request->only(['qty', 'product', 'disc', 'desc', 'price']),
                    ],
                    'payment_option' => $request->only(['account_name', 'account_number']),
                    'payment_terms' => $request->only(['penalty', 'due', 'optionsRadios', 'sendOption', 'notes']),
                    'is_send' => 0
                ];

            }
        }


        $invoice = History::create($data);
        return redirect(route('invoice'));
//        return $request;
    }

    public function view($id)
    {
        $data = History::where('id', $id)->firstorfail();

        $price = 0;
        $tax = 0;
        for ($i = 0; $i < count($data->lines['item']['qty']); $i++) {
            $price = $price = $price + $data->lines['item']['price'][$i];
        }
        $tax = $price * ($data->payment_terms['penalty'] / 100);
        $total = $price + $tax;
        $dt = [
            'price' => $price,
            'tax' => $tax,
            'shipping' => '0',
            'total' => $total
        ];

        return view('rein.pages.invoice.invoice', compact('data', 'dt'));
    }

    public function generatePdf(Request $request)
    {
        $data = History::where('id', $request->id)->firstorfail();
        $price = 0;
        $tax = 0;
        for ($i = 0; $i < count($data->lines['item']['qty']); $i++) {
            $price = $price = $price + $data->lines['item']['price'][$i];
        }
        $tax = $price * ($data->payment_terms['penalty'] / 100);
        $total = $price + $tax;
        $dt = [
            'price' => $price,
            'tax' => $tax,
            'shipping' => '0',
            'total' => $total
        ];
        $pdf = PDF::loadView('invoice_pdf', ['data' => $data, 'dt' => $dt]);
        return $pdf->stream('laporan-pegawai-pdf');
//        return view('invoice_pdf',compact('data','dt'));
    }


}
