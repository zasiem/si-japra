<?php namespace App\Controllers;

class HomeController extends BaseController
{
	public function index()
	{
		if(false){
			return view('members/presence');
		}else{
			return redirect()->to('/login');
		}

	}

	//--------------------------------------------------------------------

}
