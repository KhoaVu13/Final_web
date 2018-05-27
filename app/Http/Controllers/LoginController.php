<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use App\user;
use Auth;
use Cart;
class LoginController extends Controller
{
	public function getLogin()
		{
			return view('page.login');
		}
	public function postLogin(Request $req)
	{
		$this->validate($req,
            [
                'email'=>'required|email',
                'password'=>'required|min:6|max:20'
            ],
            [
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Email không đúng định dạng',
                'password.required'=>'Vui lòng nhập mật khẩu',
                'password.min'=>'Mật khẩu ít nhất 6 kí tự',
                'password.max'=>'Mật khẩu không quá 20 kí tự'
            ]
        );
        $credentials = array('email'=>$req->email,'password'=>$req->password);
        // $user = User::where([
        //         ['email','=',$req->email],
        //         ['status','=','1']
        //     ])->first();

        // if($user){
            if(Auth::attempt($credentials)){

            	//return redirect()->back()->with(['flag'=>'success','message'=>'Đăng nhập thành công']);
            	return redirect()->route('trangchu');
            }
            else{
                return redirect()->back()->with(['flag'=>'danger','message'=>'Emails hoặc mật khẩu không đúng']);
            }
        }
        // else{
        //    return redirect()->back()->with(['flag'=>'danger','message'=>'Tài khoản chưa kích hoạt']); 
        // }
        public function postLogout()
        {
            Cart::destroy();
        	Auth::logout();
        	return redirect()->route('trangchu');
    	}
}
	
