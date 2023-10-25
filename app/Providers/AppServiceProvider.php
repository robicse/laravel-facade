<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\SomeServiceExample;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind('SomeService', function() {
            return new SomeServiceExample('123123');
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
