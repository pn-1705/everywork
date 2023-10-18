<?php

namespace App\Providers;

use App\Models\FooterSetting;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
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
//        $footer_setting = FooterSetting::all();
//        View::hasMacro('footer_setting', $footer_setting);
//        View::composer(['profile', 'homepage'], function ($view) {
//            $view->with('NAME_VIEW_SHARE', 'Trương thanh hùng');
//        });

    }



}
