<?php

namespace App\Console\Commands;

use App\Models\History as User;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use PDF;

class SendInvoice extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'invoice:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sending Invoice';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $user = User::where('is_send', 0)->get();
        for ($i = 0; $i < count($user); $i++) {
            $price = 0;
            $tax = 0;
            for ($c = 0; $c < count($user[$i]->lines['item']['qty']); $c++) {
                $price = $price = $price + $user[$i]->lines['item']['price'][$c];
            }
            $tax = $price * ($user[$i]->payment_terms['penalty'] / 100);
            $total = $price + $tax;
            $dt = [
                'price' => $price,
                'tax' => $tax,
                'shipping' => '0',
                'total' => $total
            ];
            $pdf = PDF::loadView('invoice_pdf', ['data' => $user[$i], 'dt' => $dt]);

            Mail::raw('We are sending your invoice in the file attachtment ', function ($message) use ($pdf, $user, $i) {
                $message->from('roxasnogeki@gmail.com');
                $message->to($user[$i]->billed_to['for_email'])->subject('Blessed Invoice');
                $message->attachData($pdf->output(), 'Invoice.pdf');
            });

            $user[$i]->is_send=1;
            $user[$i]->save();

        }
        $this->info('Invoice Has Been Sent');


    }
}
