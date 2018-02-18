<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        

        view()->composer('*', function ($view) {
            $notifications= \App\Notification::all();
            $ncount= \App\Notification::count();
            $view->with('notifications', $notifications)->with('ncount',$ncount);
        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
