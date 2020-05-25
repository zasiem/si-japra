<?php namespace App\Controllers;

use App\Models\PracticalWork;
use App\Models\Division;

class AuthController extends BaseController
{

	public function login()
	{
			return view('login');
	}

	public function register()
	{
		$PracticalWork = new PracticalWork();
		$Division = new Division();
		$data["practicalworks"] = $PracticalWork->findAll();
		$data["divisions"] = $Division->findAll();
		return view('register', $data);
	}

	//--------------------------------------------------------------------

}
