<?php namespace App\Controllers;

use CodeIgniter\I18n\Time;

use App\Models\PracticalWork;
use App\Models\User;

class PracticalWorkController extends BaseController
{

	public function index()
	{
		$PracticalWork = new PracticalWork();
		$data['practical_works'] = $PracticalWork->findAll();
		return view('admins/practical-works/index', $data);
	}

	public function create()
	{
		return view('admins/practical-works/create');
	}

	public function store()
	{
		$path = $this->request->getFile('image')->store('practical_works/');
		$name = $this->request->getPost('name');

		$data = [
			'image' => $path,
			'name' => $name,
		];

		$PracticalWork = new PracticalWork();
		if (!$PracticalWork->save($data)) {
			session()->setFlashdata('errors', $PracticalWork->errors());
			return redirect()->to("/practical-works/create");
		}
		session()->setFlashdata('success', 'Berhasil Menginput Practical Works!');
		return redirect()->to("/practical-works/create");

	}

}
