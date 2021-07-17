<?php


namespace Ssz\Avatar;

use Illuminate\Support\ServiceProvider;

class AvatarProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services
     */
    public function boot(){
        $this->publishes([
            __DIR__.'/config/avatar.php' => config_path('avatar.php'),
        ]);
    }

    public function register()
    {
        $this->app->singleton('avatar', function ($app) {
            return new Avatar($app['config']);
        });
    }
}
