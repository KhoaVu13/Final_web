<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\ProductsType;
use App\Cart;
Use Session;
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
            $view->with('pt_1',$product_type_1);
            $view->with('pt_0',$product_type_0);
        });

        view()->composer(['header','page.cart'],function($view){
            if(Session('cart')){
                $oldCart = Session::get('cart');
                $cart = new Cart($oldCart);
                $view->with(['cart'=>Session::get('cart'), 'product_cart'=>$cart->items,'totalPrice'=>$cart->totalPrice,'totalQty'=>$cart->totalQty]);
            }
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
