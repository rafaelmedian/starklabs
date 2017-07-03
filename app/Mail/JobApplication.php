<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class JobApplication extends Mailable
{
    use Queueable, SerializesModels;

    public $jobApplication;

    /**
     * Create a new message instance.
     * @param $jobApplication
     */
    public function __construct($jobApplication)
    {
        $this->jobApplication = $jobApplication;
    }

    /**
     * Build the message.
     *
     * @return $this
     */

    public function build()
    {
        return $this->to($this->jobApplication->email,
                $this->jobApplication->full_name)
                ->view('emails.jobapplication');
    }
}
