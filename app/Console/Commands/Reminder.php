<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use Illuminate\Support\Facades\URL;
use App\User;

class Reminder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:reminder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send users reminding them to hand in their shifts';

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
        
        //
        $users = User::where('is_manager', 0)->get();
        
            foreach($users as $user) {

                Mail::send('mail/remindMail',
                [],
                function($message)use($user) {
                    
                    $message
                        ->to($user->email)
                        ->bcc('admin@sample.com')
                        ->subject("シフトの提出をお願いします☺");
                });

            }
    }   
   
}
