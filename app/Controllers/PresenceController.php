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

		$data = [
			"nim" => session()->get('nim'),
			"goals" => $this->request->getPost("goals"),
			"dones" => $this->request->getPost("dones"),
			"evidences" => $this->request->getPost("evidences"),
			"resistances" => $this->request->getPost("resistances"),
		];
		$Presence = new Presence();
		if (!$Presence->save($data)) {
			return view('members/home', ['errors' => $Presence->errors()]);
		}
		session()->setFlashdata('success', 'Berhasil Menginput Kehadiran!');
		return redirect()->to("/presence");

	}

	//--------------------------------------------------------------------

}
