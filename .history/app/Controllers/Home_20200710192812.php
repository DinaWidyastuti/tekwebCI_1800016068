<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return redirect()->route('login');
		return view('welcome_message');
	}

	public function home()
	{
		echo "selamat datang dihalaman admin";
	}
	//--------------------------------------------------------------------

}
