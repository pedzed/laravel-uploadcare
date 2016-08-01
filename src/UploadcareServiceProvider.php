<?php

namespace PedZed\LaravelUploadcare;

use Illuminate\Support\ServiceProvider;
use Uploadcare\Api as Uploadcare;

class UploadcareServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('uploadcare', function() {
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
    public function provides() : array
    {
        return [
            Uploadcare::class,
        ];
    }
}
