<?php

namespace App\Models;

use CodeIgniter\Model;

class Penyakit_model extends Model
{
	protected $table = 'penyakit';

	public function getPenyakit($idPenyakit = false)
	{
		if ($idPenyakit === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id_penyakit' => $idPenyakit]);
        }
	}
}