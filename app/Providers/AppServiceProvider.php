<?php

namespace App\Providers;

use App\Console\Commands\ModelMakeCommand;

use App\Models\Category;
use App\Models\Check;
use App\Models\Client;
use App\Models\Setting;
use App\Observers\CheckObserver;
use App\Observers\ClientObserver;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        /*
         * Register Console ModelMakeCommand
         * This Console Change Default Model path
         */
        $this->app->extend('command.model.make', function ($command, $app) {
            return new ModelMakeCommand($app['files']);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        View::composer('site.includes.*', function ($view){
            $view -> with('categories', Category::select(['id', 'name'])->get());
        });
        View::composer(['admin.*', 'site.*', 'auth.*'], function ($view){
            $view -> with('setting', Setting::first());
        });
    }
}
