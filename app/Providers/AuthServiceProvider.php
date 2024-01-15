<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Tweet;
use App\Models\User;
use Illuminate\Auth\Access\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate as FacadesGate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        FacadesGate::define('delete-tweet', function (User $user, Tweet $tweet) {
            return $user->id === $tweet->user_id;
        });
    }
}
