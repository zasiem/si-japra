<?php namespace App\Controllers;

class AuthController extends BaseController
{
	public function index()
	{
			return view('login');
	}

	public function register()
	{
		return view('register');
	}

	//--------------------------------------------------------------------

}
