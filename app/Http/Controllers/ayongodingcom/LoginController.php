<?php

namespace App\Http\Controllers\AyoNgodingCom;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
	public function login()
	{
		if (Auth::check()) {
			return redirect('home');
		} else {
			return view('login');
		}
	}

	public function actionlogin(Request $request)
	{
		$data = [
			'email' => $request->input('email'),
			'password' => $request->input('password'),
		];

		if (Auth::attempt($data)) {
			return redirect('home');
		} else {
			Session::flash('error', 'Email atau password salah!');
			return redirect('/');
		}
	}

	public function actionlogout()
	{
		Auth::logout();
		return redirect('/');
	}
}
