<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\Bills;
use App\BillDetail;
use Cart;
use Auth;

class CheckOutController extends Controller
{

    public function getCheckOut()
    {
        $content = Cart::content();
        $total = Cart::total();
        return view('page.checkout',compact('content','total'));
    }
    public function postCheckOut(Request $req)
    {
        $content = Cart::content();
        $total = Cart::total();

        $bill = new Bills;
        $bill->id_user = Auth::user()->id;
        $bill->date_order = date('Y-m-d');
        $bill->total = $total;
        $bill->payment = $req->payment_method;
        $bill->note = $req->notes;
        $bill->save();


        foreach ($content as $c) 
        {
            $bill_detail = new BillDetail;
            $bill_detail->id_bill = $bill->id;
            $bill_detail->id_product = $c->id;
            $bill_detail->quantity = $c->qty;
            $bill_detail->unit_price = $c->price;
            $bill_detail->save();
        }
        Cart::destroy();
        return redirect()->back()->with('thongbao','Đặt hàng thành công');
    }  
}
