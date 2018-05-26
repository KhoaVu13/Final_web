<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use App\user;

class LoginController extends Controller
{
	public function getLogin()
		{
			return view('page.login');
		}
}