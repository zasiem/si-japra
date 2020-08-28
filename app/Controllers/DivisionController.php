<?php namespace App\Controllers;

use CodeIgniter\I18n\Time;

use App\Models\Division;
use App\Models\PracticalWork;
use App\Models\User;

class DivisionController extends BaseController
{

	public function index()
	{
		$Division = new Division();
		$divisions = $Division->getAllDivisions();
		return view('admins/divisions/index', ['divisions' => $divisions]);
	}

	public function create()
	{
		$PracticalWork = new PracticalWork();
		$practical_works = $PracticalWork->findAll();
		return view('admins/divisions/create', ['practical_works' => $practical_works]);
	}

	public function store()
	{
		$name = $this->request->getPost('name');
		$practical_work_id = $this->request->getPost('practical_work_id');
		
		$data = [
			'practical_work_id' => $practical_work_id,
			'name' => $name,
		];
		
		$Division = new Division();
		if (!$Division->save($data)) {
			session()->setFlashdata('errors', $Division->errors());
			return redirect()->to("/divisions/create");
		}
		session()->setFlashdata('success', 'Berhasil Menginput Practical Works!');
		return redirect()->to("/divisions/create");
	}

	public function delete()
	{
		$division_id = $this->request->getPost('id');
		$Division = new Division();
		if(!$Division->delete(['id' => $division_id])){
			session()->setFlashdata('errors', $Division->errors());
			return redirect()->to("/divisions");
		}
		session()->setFlashdata('success', 'Berhasil Menghapus Division!');
		return redirect()->to("/divisions");
	}

}
