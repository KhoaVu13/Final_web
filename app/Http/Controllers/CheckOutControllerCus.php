<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\Bills;
use App\BillDetail;
use App\Customer;
use Cart;
use Auth;

class CheckOutControllerCus extends Controller
{

    public function getCheckOutCus()
    {
        return view('page.checkoutcus');
    }
    public function postCheckOutCus(Request $req)
    {
         $this->validate($req,
            [
                'email'=>'required|email|unique:customer,email',
                'name'=>'required',
                'address'=>'required',
                'gender'=>'required',
                'phone'=>'required'
            ],
            [
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Không đúng định dạng email',
                'email.unique'=>'Email đã có người sử dụng',
                'name.required'=>'Họ tên không được để trống',
                'address.required'=>'Địa chỉ không được đê trống',
                'gender.required'=>'Giới tính không được để trống',
                'phone.required'=>'Điện thoại không đc để trống'
            ]);

        $content = Cart::content();
        $total = Cart::total();
        $subtotal = Cart::subtotal();

        $customer = new Customer;
        $customer->name = $req->name;
        $customer->gender = $req->gender;
        $customer->email = $req->email;
        $customer->address = $req->address;
        $customer->phone_number = $req->phone;
        $customer->note = '';
        $customer->save();

        $bill = new Bills;
        $bill->id_customer = $customer->id;
        $bill->date_order = date('Y-m-d');
        $bill->total = $subtotal;
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
