<?php

namespace William0friend\AbuseipdbPhp;

use Illuminate\Support\ServiceProvider;

class AbuseipdbPhpServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'abuseipdb-php');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'abuseipdb-php');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        $this->publishes([
            __DIR__ . '/../config/abuseipdb.php' => config_path('abuseipdb.php'),
        ], 'config');
	
	//if ($this->app->runningInConsole()) {
            //$this->publishes([
            //    __DIR__.'/../config/config.php' => config_path('abuseipdb-php.php'),
            //], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/abuseipdb-php'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/abuseipdb-php'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/abuseipdb-php'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->bind('AbuseIPDB', function () {
            return new AbuseIPDB(config('abuseipdb.api_key'));
        });
        // Automatically apply the package configuration
        //$this->mergeConfigFrom(__DIR__.'/../config/config.php', 'abuseipdb-php');

        // Register the main class to use with the facade
        //$this->app->singleton('abuseipdb-php', function () {
        //    return new AbuseipdbPhp;
        //});
    }
}


<?php

namespace AbuseIPDB;

use Illuminate\Support\ServiceProvider;

//class AbuseIPDBServiceProvider extends ServiceProvider
//{
//    public function register()
//    {
//        $this->app->bind('AbuseIPDB', function () {
//            return new AbuseIPDB(config('abuseipdb.api_key'));
//        });
//    }

//    public function boot()
//    {
//        $this->publishes([
//            __DIR__ . '/../config/abuseipdb.php' => config_path('abuseipdb.php'),
//        ], 'config');
//    }
//}

