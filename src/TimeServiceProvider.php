<?php
namespace Vijay\Time;

use Illuminate\Support\ServiceProvider;

class TimeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__ . '/../routes/web.php';
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'vjtime');
        //$this->publishes([        __DIR__.'/views' => base_path('resources/views/laraveldaily/timezones'),        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->publishes([__DIR__.'/../publishable/assets' => public_path('assets')]);
        
    }
}