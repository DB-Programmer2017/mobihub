<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\ContactUs;

class SalesMail extends Mailable
{
    use Queueable, SerializesModels;

    // detail instance
    public $contactUs;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contactUs)
    {
        $this->contactUs  =   $contactUs;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Client contacted from www.mobihub.co.th')
                    ->view('admin.include.contactus-mail');
    }
}
