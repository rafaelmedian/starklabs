<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Bot extends Mailable
{
    use Queueable, SerializesModels;

    public $bot;
    public $customer;
    /**
     * Create a new message instance.
     * @param $Bot
     */
    public function __construct($bot, $customer)
    {
        $this->bot = $bot;
        $this->customer = $customer;
    }

    /**
     * Build the message.
     *
     * @return $this
     */

    public function build()
    {
        return $this->to($this->customer->email, $this->customer->full_name)
                     ->view('emails.bot');
    }
}
