<?php

namespace App\Providers;

use App\Models\Config;
use App\Models\Service;
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
        $config = Config::whereIn('name', $configFields)->get()->getAssoc(); // getAssoc - collection custom method key->values

        $menu = Config::menu()->convertToArray(); // menu - custom method, convertToArray -> convert menu string to array

        $servicesMenu = Service::select('slug','title')->limit(4)->get();

        View::share('globalConfig', $config);
        View::share('mainMenu', $menu);
        View::share('servicesMenu', $servicesMenu);
    }
}
