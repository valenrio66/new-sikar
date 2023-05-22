<?php

namespace App\Controllers;

use App\Models\Penyakit_model;

class Penyakit extends BaseController
{
	public function datapenyakit()
	{
		$model = new Penyakit_model();
		$data['title'] = 'Data Penyakit';
		$data['getPenyakit'] = $model->getPenyakit();

		return view('penyakit', $data);
	}
}
