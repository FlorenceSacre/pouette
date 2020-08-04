<?php

namespace App\Models;

use App\Mail\NewSubscription;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Subscriptions extends Model
{
    protected $guarded = [];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function getUnsubscriptionLinkAttribute() {
        return url("/unsubscription/{$this->unsubscription_token}");
    }

    public function sendMeAnEmail() {
       Mail::to('451f52d90e-c1f100@inbox.mailtrap.io')->send(new NewSubscription($this));
    }
}
