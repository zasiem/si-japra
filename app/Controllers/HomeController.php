<?php namespace App\Controllers;

class HomeController extends BaseController
{
	public function index()
	{
		if(session()->role == "member"){
			return redirect()->to('/presence');
		}elseif(session()->role == "admin"){
			return redirect()->to('/dashboard');
		}else{
			return redirect()->to('/login');
		}
	}

	public function dashboardIndex()
	{
		return view('admins/home');
	}

	//--------------------------------------------------------------------

}
