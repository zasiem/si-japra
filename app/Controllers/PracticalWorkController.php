<?php

namespace App\Controllers;

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
		$file = $this->request->getFile('image');
		$fileName = $file->getRandomName();
		$file->move(ROOTPATH . 'public/assets/uploads/', $fileName);
		$name = $this->request->getPost('name');

		$data = [
			'image' => $fileName,
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

	public function delete()
	{
		$id = $this->request->getPost('id');
		$PracticalWork = new PracticalWork();
		if (!$PracticalWork->delete(['id' => $id])) {
			session()->setFlashdata('errors', $PracticalWork->errors());
			return redirect()->to("/practical-works");
		}
		session()->setFlashdata('success', 'Berhasil Menghapus Practical Works!');
		return redirect()->to("/practical-works");
	}
}
