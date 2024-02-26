<?php

namespace App\Providers;

use App\Models\Config;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $configFields = ['address', 'working-time', 'phone', 'fb-link', 'email'];
        $config = Config::whereIn('name', $configFields)->get()->getAssoc();

        $menu = Config::menu()->convertToArray();
        View::share('config', $config);
        View::share('mainMenu', $menu);
    }
}
