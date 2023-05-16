<?php

namespace App\Controllers;

use App\Models\Penyakit_model;

class Penyakit extends BaseController
{
	public function index()
	{
		$model = new Penyakit_model();
		$data = [
			'penyakit'  => $model->getPenyakit(),
			'title' => 'Data Penyakit',
		];

		return view('templates/header', $data) . view('penyakit', $data) . view('templates/footer', $data);
	}

	// public function hasil()
	// {
	// 	$data = [
	// 		'title' => 'Hasil Analisa Sistem Pakar',
	// 		'penyakit' => $this->request->getPost('penyakit')
	// 	];
	// 	return view('templates/header', $data) . view('hasil', $data) . view('templates/footer', $data);
	// }
}