<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class sendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

     public $emailData;

    public function __construct($data) 
    {
        $this->emailData = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('benjamin.andoh@abibiman.org')
                    ->subject($this->emailData['subject'])
                    ->view('Mail.sendEmail')->with(['data' => $this->emailData]);
    }
}





