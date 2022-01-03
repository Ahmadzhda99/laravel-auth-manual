<?php

namespace App\Http\Controllers\ayongodingcom;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function index()
	{
		return view('home');
	}
}
