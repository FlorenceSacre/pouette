<?php

namespace App\Http\Controllers;

use App\Models\Subscriptions;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class SubscriptionController extends Controller
{
    public function __invoke() {
        request()->validate([
            'stripeToken' => ['required'],
            'amount' => ['required', Rule::in([5,12])],
            'street' => ['required'],
            'postcode' => ['required'],
            'city' => ['required'],
            'country' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        \Stripe\Stripe::setApiKey(config('services.stripe.secret'));

        $customer = \Stripe\Customer::create([
            'source' => request('stripeToken'),
            'name' => request('name'),
            'email' => request('email'),
        ]);
//        $peut = request('email');
//        dd($peut);
//        $pouette = DB::table('users')->where('email',$peut);
//        dd($pouette);
//         if(!isset($pouette)) {
        if (request('amount') == '5') {
            $role = 'customer';
        } else {
            $role = 'subscriber';
        }
        User::create([
            'name' => request('name'),
            'street' => request('street'),
            'postcode' => request('postcode'),
            'city' => request('city'),
            'country' => request('country'),
            'email' => request('email'),
            'password' => request(bcrypt('password')),
            'role' => $role,
            'remember_token' => request('stripeToken'),
        ]);
        //}

        \Stripe\Subscription::create([
            'customer' => $customer->id,
            'items' => [['plan' => request('amount')]],
        ]);

        $subscription = Subscriptions::create([
            'stripe_id' => $customer->id,
            'amount' => request('amount'),
            'unsubscription_token' => Str::random(),
            //'users_id' => $users->id,
        ]);

        $subscription->sendMeAnEmail();

        dd($customer, $subscription);
    }
}
