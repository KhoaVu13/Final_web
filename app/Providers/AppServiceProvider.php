<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\ProductsType;
//use App\Cart;
use Session;
use Cart;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
     
        view()->composer('header',function($view){
            $product_type_1 = ProductsType::where('id_type',1)->get();
            $product_type_0 = ProductsType::where('id_type',0)->get();
            $count = Cart::count();
            $view->with('pt_1',$product_type_1);
            $view->with('pt_0',$product_type_0);
            $view->with('count',$count);
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
