<?php

namespace App\Http\Controllers;

use App\Models\Subscriptions;
use Illuminate\Support\Arr;

class UnsubscriptionController extends Controller
{
    public function __invoke($token) {
        \Stripe\Stripe::setApiKey(config('services.stripe.secret'));
        $subscription = Subscriptions::where('unsubscription_token', $token)->firstOrFail();
        $subscription = Arr::first(\Stripe\Subscription::all(['customer'=>$subscription->stripe_id])['data']);
        $subscription->delete();
        echo 'Votre abonnement a bien été supprimé';
        return('<button type="button"><a  href="/home">Revenir à l\'accueil</a></button>');
    }
}
