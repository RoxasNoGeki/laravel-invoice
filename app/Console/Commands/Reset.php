<?php

namespace App\Console\Commands;

use App\Models\History as User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class Reset extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'invoice:reset';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reset is_send to 0';

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
        $user = User::where('is_send', 1)->get();
        for ($i = 0; $i < count($user); $i++) {
            $user[$i]->is_send=0;
            $user[$i]->save();
        }

        $this->info('User is_send has been reset');
    }

}
