<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // define a admin user role
        Gate::define('isAdmin', function($user) {
            return $user->role == 'admin';
        });

        //define a subscriber user role
        Gate::define('isSubscriber', function($user) {
            return $user->role == 'subscriber';
        });

        // define a subscriber unlimitted role
        Gate::define('isSubscriberUnlimited', function($user) {
            return $user->role == 'subunlimited';
        });

    }
}
