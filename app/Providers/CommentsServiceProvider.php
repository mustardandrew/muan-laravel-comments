<?php

namespace Muan\Comments\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class CommentsServiceProvider
 *
 * @package Muan\Comments\Providers
 */
class CommentsServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->initMigrations();
    }

    /**
     * Init migrations
     */
    protected function initMigrations()
    {
        $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');
    }

}
