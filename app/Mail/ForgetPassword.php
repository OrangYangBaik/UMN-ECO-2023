<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ForgetPassword extends Mailable
{
    use Queueable, SerializesModels;


    
          private $full_name;
    private $token;

    public function __construct($full_name, $token) {
        $this->full_name = $full_name;
        $this->token = $token;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('VERIFICATION CODE')->view('cms.page.Downpour.forgetPassword', [
            'full_name' => $this->full_name,
            'token' => $this->token
        ]);
    }
}
