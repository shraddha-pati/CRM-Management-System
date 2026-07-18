<?php

namespace App\Controllers;

use App\Models\AdminLoginModel;

class AdminLogin extends BaseController
{
	public function add()
	{

		echo view('Admin/login');
	}

	public function save()
	{
		$session = session();
		$email = $this->request->getvar('email');
		$phonenumber = $this->request->getvar('phonenumber');
		$password = $this->request->getvar('password');
		//exit;

		$validationRule = $this->validate([
			'phonenumber' => 'required',
			'password' => 'required',



		]);
		if (!$validationRule) {
			return redirect()->to(base_url('/login'));
		} else {

			$AdminLoginModel = new AdminLoginModel();

			$a = $AdminLoginModel->where('phonenumber', $phonenumber)->where('password', $password)->first();

			if ($a) {

				$session->set('id', $a['id']);
				$session->set('phonenumber', $a['phonenumber']);
				$session->set('email', $a['email']);

				//print_r($email);
				//exit;
				session()->setFlashdata('success', '<b style="color:green;">Login Successfully!</b>');
				return redirect()->to(base_url('/Admin/DashBoard/list'));
			} else {
				session()->setFlashdata('error', '<b style="color:red;">Incorrect UserName or Password!!</b>');
				return redirect()->to(base_url('/login'));
			}
		}
	}
	public function logout()
	{
		$session = session();
		$session = session_destroy();
		return redirect()->to(base_url('/login'));
	}
}
