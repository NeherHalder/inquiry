<?php

namespace Neher\Inquiry\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Neher\Inquiry\Models\Inquiry;

class InquiryArrived extends Mailable
{
    use Queueable, SerializesModels;

    public $iquiry;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Inquiry $inquiry)
    {
        $this->inquiry = $inquiry;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('inquiry::emails.inquries.arrived')->with(['inquiry'=>$this->inquiry]);
    }
}
