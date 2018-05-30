<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\Bills;
use App\BillDetail;
use App\Products;
use Cart;
use Auth;

class AccountController extends Controller
{
    public function getAccount()
    {
        $acc = Bills::where('id_user',Auth::user()->id)->get();
        // //$info = array();
        // foreach ($acc as $a) 
        // {
        //     $info = BillDetail::where('id_bill',$a->id)->get();
        // }
        // // $info = BillDetail::where('id_bill',28)->get();
         return view('page.account',compact('acc'));
    }
    public function getHistory($id)
    {
        $history = BillDetail::where('id_bill',$id)->get();
        $p_d = Products::where('id',$history->id)->get();
        return view('page.historydetail',compact('history','pd'));
        //3print_r($history);
    }
   
}
