<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\theloai;
use App\Models\quocgia;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        view()->composer('layout.user.sidebar', function($view){
           $loai = theloai::all();
           $quocgia= quocgia::all();

           $view->with('loai_sidebar',$loai);
           $view->with('quocgia_sidebar',$quocgia);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
