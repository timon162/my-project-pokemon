<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
       
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app->bind(
            \App\Repositories\Interfaces\PokemonRepositoryInterface::class,
            \App\Repositories\PokemonRepository::class
        );

        $this->app->bind(
           \App\Services\Interfaces\PokemonServiceInterface::class,
            \App\Services\PokemonService::class
        );

        $this->app->bind(
            \App\Repositories\Interfaces\MentorRepositoryIntreface::class,
            \App\Repositories\MentorRepository::class
        );

        $this->app->bind(
            \App\Services\Interfaces\MentorServiceIntreface::class,
            \App\Services\MentorService::class
        );
    }
}
