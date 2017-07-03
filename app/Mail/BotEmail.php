<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class BotEmail extends Mailable
{
    use Queueable, SerializesModels;

      public $bot;
      public $customer;
      /**
       * Create a new message instance.
       * @param $bot
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
      return $this->view('emails.bot');
    }
}
