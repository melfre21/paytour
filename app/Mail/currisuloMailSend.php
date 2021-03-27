<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class currisuloMailSend extends Mailable
{
    use Queueable, SerializesModels;

    public $curriculo;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($curriculo)
    {
        $this->curriculo = $curriculo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Dados Curriculo')
                    ->view('email.curriculo');
    }
}
