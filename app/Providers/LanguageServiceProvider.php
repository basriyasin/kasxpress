<?php

namespace App\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Config;


class LanguageServiceProvider extends ServiceProvider 
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        parent::boot();
        app()->setLocale(Session::get('lang'));

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
        if(empty(Session::get('lang'))) {
            Session::put('lang', config('app.fallback_locale'));
        }
    }
}

