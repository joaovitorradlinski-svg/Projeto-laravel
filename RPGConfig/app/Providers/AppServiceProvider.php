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
        $this->app->bind(
        \App\Repositories\CampanhaRepositoryInterface::class,
        \App\Repositories\CampanhaRepository::class
    );
    $this->app->bind(
        \App\Repositories\LocalRepositoryInterface::class,
        \App\Repositories\LocalRepository::class
    );

    $this->app->bind(
        \App\Repositories\PersonagemRepositoryInterface::class,
        \App\Repositories\PersonagemRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
