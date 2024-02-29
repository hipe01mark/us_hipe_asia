<?php

namespace App\Providers;

use App\Libraries\CmsApiLib;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->register(RepositoryServiceProvider::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
        if ($this->app->environment('production') || $this->app->environment('staging')) {
            URL::forceScheme('https');
        }
        
        Http::macro('cmsApi', function () {
            return Http::withHeaders([
                'Accept' => CmsApiLib::JSON,
                'Content-Type' => CmsApiLib::JSON,
                'Authorization' => 'Bearer ' . Cache::get('token')
            ])->baseUrl(env('CMS_API_URI'));
        });
    }
}
