<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Quotation;

class QuotationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $quotation;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($quotation)
    {
        $this->quotation    =   $quotation;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Client required quotation from www.mobihub.co.th')
                    ->view('admin.include.quotation-mail');
    }
}
