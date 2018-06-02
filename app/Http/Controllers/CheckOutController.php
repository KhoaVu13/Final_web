<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\Bills;
use App\BillDetail;
use App\Products;
use Cart;
use Auth;

class CheckOutController extends Controller
{

    public function getCheckOut()
    {
        $content = Cart::content();
        $total = Cart::total();
        $subtotal = Cart::subtotal();
        return view('page.checkout',compact('content','subtotal'));
    }
    public function postCheckOut(Request $req)
    {
         $this->validate($req,
            [
                'payment_method'=>'required',
            ],
            [
                'payment_method.required'=>'Vui lòng chọn hình thức thanh toán',
            ]);

        $content = Cart::content();
        $total = Cart::total();
        $subtotal = Cart::subtotal();

        $bill = new Bills;
        $bill->id_user = Auth::user()->id;
        $bill->date_order = date('Y-m-d');
        $bill->total = $subtotal;
        $bill->payment = $req->payment_method;
        $bill->note = $req->notes;
        $bill->status='Đang xử lý';
        $bill->save();


        foreach ($content as $c) 
        {
            $bill_detail = new BillDetail; 
            $bill_detail->id_bill = $bill->id;
            $bill_detail->id_product = $c->id;
            $bill_detail->quantity = $c->qty;
            $bill_detail->unit_price = $c->price;
            $bill_detail->save();
            $products = Products::find($c->id);
            $products->qty = $products->qty - $c->qty;
            $products->save();
        }
       
        Cart::destroy();
        return redirect()->back()->with('thongbao','Đặt hàng thành công');
    }  
}
