<?php

namespace PedZed\LaravelUploadcare;

use Illuminate\Support\ServiceProvider;
use Uploadcare\Api as Uploadcare;

class UploadcareServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->setupConfig();
    }

    /**
     * Setup the config.
     *
     * @return void
     */
    protected function setupConfig()
    {
        $configFile = dirname(__DIR__).'/config/uploadcare.php';

        $this->publishes([
            $configFile => config_path('uploadcare.php'),
        ]);

        $this->mergeConfigFrom($configFile, 'uploadcare');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('uploadcare', function () {
            $publicKey = config('uploadcare.public_key');
            $privateKey = config('uploadcare.private_key');

            return new Uploadcare($publicKey, $privateKey);
        });
    }

    /**
    * Get the services provided by the provider.
    *
    * @return array
    */
    public function provides()
    {
        return [
            Uploadcare::class,
        ];
    }
}
