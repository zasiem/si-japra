<?php namespace App\Controllers;

class HomeController extends BaseController
{
	public function index()
	{
		if(session()->role == "member"){
			return view('members/home');
		}elseif(session()->role == "admin"){
			return view('admins/dashboard');
		}else{
			return redirect()->to('/login');
		}

	}

	//--------------------------------------------------------------------

}
