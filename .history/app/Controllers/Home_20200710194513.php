<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return redirect()->route('login');
	}

	public function home()
	{
		// return view('welcome_message');
		echo 'tes';
	}
	//--------------------------------------------------------------------

}
