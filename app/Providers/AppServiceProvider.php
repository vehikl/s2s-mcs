<?php

namespace App\Providers;

use App\Models\IncomingEvent;
use App\Observers\IncomingEventObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        IncomingEvent::observe(IncomingEventObserver::class);
    }
}
