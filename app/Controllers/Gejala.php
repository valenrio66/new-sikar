<?php

namespace App\Controllers;

use App\Models\Gejala_model;

class Gejala extends BaseController
{
    public function datagejala()
	{
		$model = new Gejala_model();
		$data['title'] = 'Data Gejala';
        $data['getGejala'] = $model->getGejala();

		return  view('gejala', $data);
	}
}