<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;

class SendMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $send_mail;
    protected $content;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($send_mail, $content)
    {
        $this->send_mail = $send_mail;
        $this->content = $content;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $email = $this->send_mail;
        $slug = $this->content;
        Mail::send('email.notif', ['slug' => $slug], function($message) use($email){
            $message->to($email);
            $message->subject('Bantu Mereka !!');
        });
    }
}