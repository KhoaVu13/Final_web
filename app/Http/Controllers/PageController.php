<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Slide;
use App\Products;
use App\ProductsType;
use Cart;
Use Session;
use Request;
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
     public function getCheckOut(){
    	return view('page.checkout');
    }
    public function getContact(){
    	return view('page.contact');
    }
     public function getPD($id){
        $sanpham = Products::where('id',$id)->first();
    	return view('page.product_detail',compact('sanpham'));
    }
    public function getProducts($type){
        $sp_theoloai=Products::where('id_type',$type)->paginate(4);
    	return view('page.products',compact('sp_theoloai'));
            }
        //echo $sp_theoloai;}
    public function getRegister(){
    	return view('page.register');
    }
    public function muahang($id){
    $products_buy = Products::where('id',$id)->first();
    if ($products_buy->promotion_price!=0) {
       Cart::add(array('id'=>$id,'name'=>$products_buy->name,'qty'=>1,'price'=>$products_buy->promotion_price,'discount'=>0.00,'options'=>array('img'=>$products_buy->image)));
    }
    else
    {Cart::add(array('id'=>$id,'name'=>$products_buy->name,'qty'=>1,'price'=>$products_buy->unit_price,'discount'=>0.00,'options'=>array('img'=>$products_buy->image)));}
    $content = Cart::content();
       return redirect()->route('giohang');
    }

    public function giohang()
    {
        $content = Cart::content();
        $total = Cart::total();
         
        return view('page.cart',compact('content','total','count'));
    }

    public function xoasanpham($id)
    {
        Cart::remove($id);
        return redirect()->route('giohang');
    }

    public function capnhatsanpham()
    {
        if(Request::ajax())
            {
                $id = Request::get('id');
                $qty = Request::input('qty');
                Cart::update($id,$qty);
                echo "ok";
            }
    }
    public function getSignin()
    {
        return view('page.register');
    }
    public function postSignin(Request $req)
    {
        $this->validate(
            [
                'email'=>'required|email|unique:users,email',
                'password'=>'required|min:6|max:20',
                'fullname'=>'required',
                're_password'=>'required|same:password'
            ],
            [
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Không đúng định dạng email',
                'email.unique'=>'Email đã có người sử dụng',
                'password.required'=>'Vui lòng nhập mật khẩu',
                're_password.same'=>'Mật khẩu không giống nhau',
                'password.min'=>'Mật khẩu ít nhất 6 kí tự'
            ]);
        $user = new User();
        $user->full_name = $req->fullname;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->phone = $req->phone;
        $user->address = $req->address;
        $user->save();
        return redirect()->back()->with('thanhcong','Tạo tài khoản thành công');
    }

 }







