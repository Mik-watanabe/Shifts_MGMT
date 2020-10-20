<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class createUserMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request, $urls, $manager)
    {
        //
        $this->request = $request;
        $this->urls = $urls;
        $this->manager = $manager;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->subject($this->manager->name.'から-スタッフ登録-メールが届きました')
        ->view('mail.send')
        ->with([
            'text' => 'こちらのURLにアクセスし、スタッフ登録をしてください',
            'urls' => $this->urls,
            ]);
            
    }
}
