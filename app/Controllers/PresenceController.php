<?php namespace App\Controllers;

use CodeIgniter\I18n\Time;

use App\Models\Presence;

class PresenceController extends BaseController
{
	public function index()
	{

		$nim = session()->get('nim');

		$Presence = new Presence();
		$data['presences'] = $Presence->getPresences(session()->get('nim'));
		$data['time'] = Time::now('Asia/Jakarta');
		return view('members/home', $data);

	}

	public function presence()
	{
		$time1 = Time::parse('08:00:00');
		$time2 = Time::parse('10:00:00');
		$now = Time::now('Asia/Jakarta');
		return dd($now);
		$isTelat = 1;
		if ($now->isBefore($time2) AND $now->isAfter($time1)) {
			$isTelat = 0;
		}

		$data = [
			"nim" => session()->get('nim'),
			"goals" => $this->request->getPost("goals"),
			"dones" => $this->request->getPost("dones"),
			"evidences" => $this->request->getPost("evidences"),
			"resistances" => $this->request->getPost("resistances"),
			"is_late" => $isTelat,
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
