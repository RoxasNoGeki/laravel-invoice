<?php

namespace App\Console\Commands;

use App\Models\History as User;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class CreateInvoice extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'invoice:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Createing Invoice';

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

        $data=User::where('is_send','=','0')->get();

        for ($i=0;$i<count($data);$i++){
            if($data[$i]->payment_terms['optionsRadios']=='fixed'){
                if($data[$i]->payment_terms['sendOption']==1){
                    $dt=[
                        'no' => $data[$i]->no,
                        'issued_at' => Carbon::now(),
                        'due_at' => Carbon::parse($data[$i]->due_at)->addWeek(),
                        'billed_to' => $data[$i]->billed_to,
                        'issuer' => $data[$i]->issuer,
                        'lines' => $data[$i]->lines,
                        'payment_option' => $data[$i]->payment_option,
                        'payment_terms' => $data[$i]->payment_terms,
                        'is_send' => 0
                    ];
                }else{
                    $dt=[
                        'no' => $data[$i]->no,
                        'issued_at' => Carbon::now(),
                        'due_at' => Carbon::parse($data[$i]->due_at)->addMonthNoOverflow(),
                        'billed_to' => $data[$i]->billed_to,
                        'issuer' => $data[$i]->issuer,
                        'lines' => $data[$i]->lines,
                        'payment_option' => $data[$i]->payment_option,
                        'payment_terms' => $data[$i]->payment_terms,
                        'is_send' => 0
                    ];

                }
            }else{
                if($data[$i]->payment_terms['sendOption']==1){
                    $dt=[
                        'no' => $data[$i]->no,
                        'issued_at' => Carbon::now(),
                        'due_at' => Carbon::parse($data[$i]->due_at)->addDays($data[$i]->payment_terms['due']),
                        'billed_to' => $data[$i]->billed_to,
                        'issuer' => $data[$i]->issuer,
                        'lines' => $data[$i]->lines,
                        'payment_option' => $data[$i]->payment_option,
                        'payment_terms' => $data[$i]->payment_terms,
                        'is_send' => 0
                    ];
                }else{
                    $dt=[
                        'no' => $data[$i]->no,
                        'issued_at' => Carbon::now(),
                        'due_at' => Carbon::parse($data[$i]->due_at)->addMonthWithOverflow(),
                        'billed_to' => $data[$i]->billed_to,
                        'issuer' => $data[$i]->issuer,
                        'lines' => $data[$i]->lines,
                        'payment_option' => $data[$i]->payment_option,
                        'payment_terms' => $data[$i]->payment_terms,
                        'is_send' => 0
                    ];
                }
            }
            $invoice = User::create($dt);
        }

        $this->info('Invoice Has Been Sent');
    }
}
