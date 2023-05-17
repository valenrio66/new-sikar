<?php

namespace App\Models;

use CodeIgniter\Model;

class Gejala_model extends Model
{
	protected $table = 'gejala';

	public function getGejala($idGejala = false)
	{
		if ($idGejala === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id_gejala' => $idGejala]);
        }
	}
}