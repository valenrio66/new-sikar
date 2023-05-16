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
			return $this->getWhere(['id_penyakit' => $idPenyakit])->first();
		}
	}

	// public function getGejala()
	// {
	// 	$query = $this->db->table('gejala')->get();
	// 	return $query->getResultArray();
	// }

	// public function getRule()
	// {
	// 	$query = $this->db->table('rule')->get();
	// 	return $query->getResultArray();
	// }
}