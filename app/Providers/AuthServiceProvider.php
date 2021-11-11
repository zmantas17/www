<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Skate;
use App\Models\User;
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

        Gate::define('delete', function(User $user, Skate $skate){
            return $user->id == $skate->owner;
        });
        Gate::define('edit', function(User $user, Skate $skate){
            return $user->id == $skate->owner;
        });
    }
}