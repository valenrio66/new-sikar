<?php

namespace App\Controllers;

// use App\Models\UserModel;

class Dashboard extends BaseController
{
	public function index()
	{
		// $model = new UserModel();
		$data = [
			'title' => 'Dashboard',
			'nama' => session('nama'),
			// 'getUser' => $model->getUser(),
		];

		return view('template_dashboard/header', $data) . view('dashboard', $data) . view('template_dashboard/footer');
	}
}
