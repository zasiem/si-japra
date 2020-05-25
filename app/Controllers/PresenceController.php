<?php namespace App\Controllers;

use App\Models\Presence;

class PresenceController extends BaseController
{
	public function index()
	{

		$nim = session()->get('nim');

		$Presence = new Presence();
		return view('members/home');

	}

	public function presence()
	{
		
	}

	//--------------------------------------------------------------------

}
