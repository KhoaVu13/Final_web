<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use App\Products;
use App\ProductsType;
use App\Cart;
Use Session;
class PageController extends Controller
{
     public function getIndex(){
        $slide = Slide::find([1,3]);
        $slide2 = Slide::find([2,4]);
        //$newproduct = Products::where('new',1)->get(); //paginate(số lượng)=get()
        $newproduct_0 = Products::find([8,9,10,11]);
        $newproduct_1 = Products::find([12,13,14,15]);
        $newproduct_2 = Products::find([16]);
        $count = count($newproduct_0)+count($newproduct_1)+count($newproduct_2);
    	return view('page.index',compact('slide','slide2','newproduct_0','newproduct_1','newproduct_2','count'));
        
        
}
       public function getAddCart(Request $req, $id){
        $product = Product::find($id);
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($product,$id);
        $req->session()->put('cart',$cart);
       return redirect()->back();
    }
    public function getMainCart()
    {
        return view('page.cart');
    }
     public function getCheckOut(){
    	return view('page.checkout');
    }
    public function getContact(){
    	return view('page.contact');
    }
     public function getPD(Request $req){
        $sanpham = Products::where('id',$req->id)->first();
    	return view('page.product_detail',compact('sanpham'));
    }
    public function getProducts($type){
        $sp_theoloai=Products::where('id_type',$type)->get();
    	return view('page.products',compact('sp_theoloai'));
            }
        //echo $sp_theoloai;}
    public function getRegister(){
    	return view('page.register');
    }
}







