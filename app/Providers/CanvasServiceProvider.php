<?php

namespace App\Providers;

use App\Services\CanvasService;
use App\Services\Interfaces\ICanvasService;
use Illuminate\Support\ServiceProvider;
use Illuminate\Console\Scheduling\Schedule;

class CanvasServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ICanvasService::class, CanvasService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->booted(function () {
            $schedule = resolve(Schedule::class);
            $schedule->command('canvas:digest')
                ->weekly()
                ->mondays()
                ->timezone(config('app.timezone'))
                ->at('08:00')
                ->when(function () {
                    return config('canvas.mail.enabled');
                });
        });
    }
}
