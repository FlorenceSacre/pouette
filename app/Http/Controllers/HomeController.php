<?php

namespace App\Http\Controllers;

use Stripe\Customer as StripeCustomer;
use Stripe\Stripe;
use Illuminate\Support\Facades\Auth;
use Stripe\Subscription;

class HomeController extends Controller
{
    public function index() {
//        \Stripe\Stripe::setApiKey(config('services.stripe.secret'));
//        $customers = \Stripe\Customer::all()['data'];
//        foreach ($customers as $customer) {
//            dd($customer['name']);
//        }

//        if (Auth::user()) {
//            $user = Auth::user()->email;
//            $use = DB::table('users')->where('id',$user)->first();
//
//            $customer = Subscription::retrieve();
//            dd($customer);
//        }
        //dd($subscription);
        return view('home.index');

    }
}