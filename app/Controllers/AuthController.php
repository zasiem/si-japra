<?php namespace App\Controllers;

use App\Models\PracticalWork;
use App\Models\Division;
use App\Models\User;

class AuthController extends BaseController
{

	public function login()
	{
			if (session()->id != null) {
				return redirect()->to('/');
			}
			return view('login', ['practical_works' => $this->getStartup()]);
	}

	public function login_process()
	{
		$nim = $this->request->getPost("nim");
		$password = $this->request->getPost("password");

		$User = new User();
		$user = $User->where("nim", $nim)->first();
		if (!$user) {
			session()->setFlashdata('errors', ['NIM' => 'NIM tidak ditemukan']);
			return redirect()->to('/login');
		}

		if ($user['password'] != md5($password)) {
			session()->setFlashdata('errors', ['password' => 'Password salah']);
			return redirect()->to('/login');
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
		$data['practical_works'] = $this->getStartup();
		return view('register', $data);
	}

	public function register_process()
	{

		if ($this->request->getPost("password") != $this->request->getPost("reconfirm")) {
			session()->setFlashdata('errors', ['password' => 'password tidak sesuai dengan re-password']);
			return redirect()->to('/register');
		}

		$User = new User();
		$data = [
			"email" => $this->request->getPost("email"),
			"nim" => $this->request->getPost("nim"),
			"password" => md5($this->request->getPost("password")),
			"name" => $this->request->getPost("name"),
			"major" => $this->request->getPost("major"),
			"practical_work_id" => $this->request->getPost("practical_work"),
			"division_id" => $this->request->getPost("division")
		];
		if (!$User->save($data)) {
			session()->setFlashdata('errors', $User->errors());
			return redirect()->to('/register');
		}
		session()->setFlashdata('success', 'Berhasil Mendaftar!');
		return redirect()->to("/login");
	}

	//--------------------------------------------------------------------

	public function logout()
	{
		session()->destroy();
		return redirect()->to('/login');
	}

}
