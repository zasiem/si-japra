<?php namespace App\Controllers;

use App\Models\PracticalWork;
use App\Models\Division;
use App\Models\User;

class AuthController extends BaseController
{

	public function login()
	{
			return view('login');
	}

	public function login_process()
	{
		$nim = $this->request->getPost("nim");
		$password = $this->request->getPost("password");

		$User = new User();
		$user = $User->where("nim", $nim)->first();
		if (!$user) {
			return view('login', ['errors' => ['NIM' => 'NIM tidak ditemukan']]);
		}

		if ($user['password'] != $password) {
			return view('login', ['errors' => ['password' => 'Password salah']]);
		}

		$data = [
			"name" => $user["name"],
			"nim" => $user["nim"],
			'id' => $user["id"],
			'role' => $user["role"]
		];
		session()->set($data);
		return redirect()->to('/');

	}

	//--------------------------------------------------------------------

	public function register()
	{
		$PracticalWork = new PracticalWork();
		$Division = new Division();
		$data["practicalworks"] = $PracticalWork->findAll();
		$data["divisions"] = $Division->findAll();
		return view('register', $data);
	}

	public function register_process()
	{
		$User = new User();
		$data = [
			"email" => $this->request->getPost("email"),
			"nim" => $this->request->getPost("nim"),
			"password" => $this->request->getPost("password"),
			"reconfirm" => $this->request->getPost("reconfirm"),
			"name" => $this->request->getPost("name"),
			"major" => $this->request->getPost("major"),
			"practical_work_id" => $this->request->getPost("practical_work"),
			"division_id" => $this->request->getPost("division")
		];
		if (!$User->save($data)) {
			return view('login', ['errors' => $User->errors()]);
		}
		session()->setFlashdata('success', 'Berhasil Mendaftar!');
		return redirect()->to("/login");
	}

}
