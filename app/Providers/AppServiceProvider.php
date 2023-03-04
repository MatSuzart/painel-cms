<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Iluminate\Support\Facades\View;
use App\Page;

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

        $frontMenu = [
            '/'=>'Home'
        ];

        $pages = Pages::all();
        foreach($pages as $page){
            $frontMenu[ $pages['slug']] = $page['title'];
        }


        View::share('front-menu', $frontMenu);
    }
}
