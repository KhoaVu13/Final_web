<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\Bills;
use App\BillDetail;
use App\Products;
use DB;
use Cart;
use Auth;

class AccountController extends Controller
{
    public function getAccount()
    {
        $acc = Bills::where('id_user',Auth::user()->id)->get();
        return view('page.account',compact('acc'));
    }
    public function getAccount1($id)
    {
        $bill = Bills::where('id',$id)->first(); 
        $bill->status='Hủy';
        $bill->save();
        return redirect()->back();

    }
    public function getHistory($id)
    {
        $history = DB::select('select * from bill_detail,products where bill_detail.id_product = products.id and id_bill = :id',['id'=>$id]);
        return view('page.historydetail',compact('history'));
    }

   
}
