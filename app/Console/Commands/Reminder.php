<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

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
        $dt = new Carbon();
       
        if($dt->day === 14){

            $users = User::where('manager_id', 0)->get();

            foreach($users as $user) {
                // $userの中にメールアドレスが含まれている
            Mail::send('mail/remindMail', [
                "message" => "シフトの提出期限は明日の23:59までです。
            シフト未提出の方は以下のURLからアクセスし、来月のシフトを提出してください。"
            ], function($message) {
                
                $message
                    ->to($user->email)
                    ->bcc('admin@sample.com')
                    ->subject("シフトの提出をお願いします☺");
            });

            }
        }
        

       
    
    }
}
