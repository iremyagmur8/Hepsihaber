<?php

namespace App\Providers;

use App\Models\contact;
use Illuminate\Support\ServiceProvider;
use App\Models\category;
use App\Models\post;
use Config;
use Carbon\Carbon;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     *
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Carbon::setLocale(config('app.locale'));
        view()->composer('*', function ($view) {

            $vars = new \ArrayObject();

            $vars->menu = category::where('parent_id', '=', 37)->orderBy('sort')->get();
            $vars->contact = contact::first();
            $view->with(compact('vars'));
        });

    }
}
