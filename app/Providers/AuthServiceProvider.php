<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\Role;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('isManager', function($user) {
            return $user->role->type === Role::MANAGER;
        });

        Gate::define('isAdmin', function($user) {
            return $user->role->type === Role::ADMIN;
        });

        Gate::define('isUser', function($user) {
            return $user->role->type === Role::USER;
        });
    }
}
