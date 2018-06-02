<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\Bills;
use App\BillDetail;
use App\Products;
use App\Contact;
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

   public function getContact(){
        return view('page.contact');
    }
    public function postContact(Request $req)
    {
        $this->validate($req,
            ['email'=>'required|email|unique:customer,email',
             'name'=>'required',
             'notes'=>'required',],
            ['email.email'=>'Không đúng định dạng email',
             'email.required'=>'Chưa nhập email',
             'name.required'=>'Chưa nhập tên',
             'notes.required'=>'Chưa nhập thông tin phản hồi',
            ]);
        $contact = new Contact;
        $contact->name = $req->name;
        $contact->email = $req->email;
        $contact->notes=$req->notes;
        $contact->save();
        return redirect()->back()->with('thongbao','Gửi phản hồi thành công');    
    }
}
