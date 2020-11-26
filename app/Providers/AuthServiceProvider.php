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
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        $this->registerUserPolicies();

        //
    }

    public function registerUserPolicies()
    {
        Gate::define('admin', function ($user) {
            return $user->hasAccess(['admin']);
        });
        Gate::define('user', function ($user) {
            return $user->hasAccess(['user']);
        });
    }
}
