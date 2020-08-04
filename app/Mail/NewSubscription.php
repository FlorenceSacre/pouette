<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewSubscription extends Mailable
{
    use Queueable, SerializesModels;

    public $subscription;

    public function __construct($subscription)
    {
        $this->subscription = $subscription;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Nouvel abonnement')
            ->text('emails.new-subscription');
    }
}
