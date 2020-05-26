<?php namespace App\Controllers;

use App\Models\Presence;

class PresenceController extends BaseController
{
	public function index()
	{

		$nim = session()->get('nim');

		$Presence = new Presence();
		$data['presences'] = $Presence->getPresences(session()->get('nim'));
		return view('members/home', $data);

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
			session()->setFlashdata('errors', $Presence->errors());
			return redirect()->to("/presence");
		}
		session()->setFlashdata('success', 'Berhasil Menginput Kehadiran!');
		return redirect()->to("/presence");
	}

	//--------------------------------------------------------------------

}
