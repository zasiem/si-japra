<?php namespace App\Controllers;

class HomeController extends BaseController
{
	public function index()
	{
		if(session()->id != null){
			return view('members/presence');
		}else{
			return redirect()->to('/login');
		}

	}

	//--------------------------------------------------------------------

}
