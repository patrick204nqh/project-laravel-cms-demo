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
            $roleManager = \App\Models\Role::where('type', config('roles.manager'))->firstOrFail();
            // return !(App\Models\Permission::where([['user_id', '=', $user->id], ['role_id', '=', $roleManager->id]])->get()->isEmpty());
            return  !empty($user->roles->find($roleManager->id));
        });

        Gate::define('isAdmin', function($user) {
            $roleAdmin = \App\Models\Role::where('type', config('roles.admin'))->firstOrFail();
            // return !(App\Models\Permission::where([['user_id', '=', $user->id], ['role_id', '=', $roleAdmin->id]])->get()->isEmpty());
            return  !empty($user->roles->find($roleAdmin->id));
        });

        Gate::define('isUser', function($user) {
            $roleUser = \App\Models\Role::where('type', config('roles.user'))->firstOrFail();
            // return !(App\Models\Permission::where([['user_id', '=', $user->id], ['role_id', '=', $roleAdmin->id]])->get()->isEmpty());
            return  !empty($user->roles->find($roleUser->id));
        });
    }
}
