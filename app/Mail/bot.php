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
        return $this->to($this->bot->type,
                        $this->bot->estimated_budget,
                        $this->bot->description,
                        $this->customer->full_name,
                        $this->customer->company_name,
                        $this->customer->hourly_rate,
                        $this->customer->email,
                        $this->customer->location
                        )
                     ->view('emails.bot');
    }
}
