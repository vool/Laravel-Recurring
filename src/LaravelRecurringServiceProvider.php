<?php

namespace BrianFaust\Recurring;

use Illuminate\Support\ServiceProvider;

class LaravelRecurringServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/laravel-recurring.php' => config_path('laravel-recurring.php'),
        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/config/laravel-recurring.php',
            'laravel-recurring'
        );
    }
}
