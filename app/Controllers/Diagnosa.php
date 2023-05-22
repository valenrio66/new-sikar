<?php

namespace App\Controllers;

class Diagnosa extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Diagnosa Penyakit',
		];

		return view('diagnosa', $data);
	}

	public function deteksipenyakit()
	{
		// Mendapatkan gejala yang dikirim dari formulir
		$gejala = $this->request->getPost('gejala');

		// Deteksi penyakit berdasarkan gejala
		$hasilDeteksi = $this->prosesDeteksiPenyakit($gejala);

		// Menampilkan view diagnosa dengan hasil deteksi
		return view('diagnosa', ['hasilDeteksi' => $hasilDeteksi]);
	}

	// private function prosesDeteksiPenyakit($gejala)
	// {
	// 	// Logika deteksi penyakit berdasarkan gejala
	// 	switch ($gejala) {
	// 		case 'gejala1':
	// 			$hasilDeteksi = 'Tanaman Cabai Anda Mengalami Penyakit A';
	// 			break;
	// 		case 'gejala2':
	// 			$hasilDeteksi = 'Tanaman Cabai Anda Mengalami Penyakit B';
	// 			break;
	// 		case 'gejala3':
	// 			$hasilDeteksi = 'Tanaman Cabai Anda Mengalami Penyakit C';
	// 			break;
	// 		default:
	// 			$hasilDeteksi = 'Tanaman Cabai Anda Mengalami Tidak ada diagnosa';
	// 			break;
	// 	}

	// 	return $hasilDeteksi;
	// }

	// private function prosesDeteksiPenyakit($gejala)
	// {
	// 	// Inisialisasi hasil deteksi
	// 	$hasilDeteksi = 'Tanaman Cabai Anda Mengalami:';

	// 	if (!empty($gejala)) {
	// 		// Logika deteksi penyakit berdasarkan gejala yang dipilih
	// 		foreach ($gejala as $pilihan) {
	// 			switch ($pilihan) {
	// 				case 'gejala1':
	// 					$hasilDeteksi .= ' Penyakit A,';
	// 					break;
	// 				case 'gejala2':
	// 					$hasilDeteksi .= ' Penyakit B,';
	// 					break;
	// 				case 'gejala3':
	// 					$hasilDeteksi .= ' Penyakit C,';
	// 					break;
	// 					// Tambahkan case untuk gejala lain jika diperlukan
	// 			}
	// 		}

	// 		// Hapus koma terakhir
	// 		$hasilDeteksi = rtrim($hasilDeteksi, ',');
	// 	} else {
	// 		$hasilDeteksi .= ' Tidak ada diagnosa';
	// 	}

	// 	return $hasilDeteksi;
	// }

	// private function prosesDeteksiPenyakit($gejala)
	// {
	// 	// Inisialisasi hasil deteksi
	// 	$hasilDeteksi = 'Tanaman Cabai Anda Mengalami:';

	// 	if (!empty($gejala)) {
	// 		// Rules 1
	// 		$gejalaPilihan = count($gejala);
	// 		if ($gejalaPilihan == 4 && in_array('gejala1', $gejala) && in_array('gejala2', $gejala) && in_array('gejala3', $gejala) && in_array('gejala4', $gejala)) {
	// 			$hasilDeteksi .= ' Layu Fusarium (Fusarium Wilt)';
	// 			// Rules 2
	// 		} else if (!empty($gejala)) {
	// 			$gejalaPilihan = count($gejala);
	// 			if ($gejalaPilihan == 3 && in_array('gejala5', $gejala) && in_array('gejala6', $gejala) && in_array('gejala7', $gejala)) {
	// 				$hasilDeteksi .= ' Busuk Phytophthora (Phytophthora rot)';
	// 				// Rules 3
	// 			} else if (!empty($gejala)) {
	// 				$gejalaPilihan = count($gejala);
	// 				if ($gejalaPilihan == 4 && in_array('gejala8', $gejala) && in_array('gejala9', $gejala) && in_array('gejala10', $gejala) && in_array('gejala11', $gejala)) {
	// 					$hasilDeteksi .= ' Busuk Akar Ralstonia (Ralstonia root rot)';
	// 					// Rules 4
	// 				} else if (!empty($gejala)) {
	// 					$gejalaPilihan = count($gejala);
	// 					if ($gejalaPilihan == 3 && in_array('gejala12', $gejala) && in_array('gejala13', $gejala) && in_array('gejala14', $gejala)) {
	// 						$hasilDeteksi .= ' Penyakit Hawar Daun (Leaf spot disease)';
	// 						// Rules 5
	// 					} else if (!empty($gejala)) {
	// 						$gejalaPilihan = count($gejala);
	// 						if ($gejalaPilihan == 3 && in_array('gejala15', $gejala) && in_array('gejala16', $gejala) && in_array('gejala17', $gejala)) {
	// 							$hasilDeteksi .= ' Embun Tepung (Powdery mildew)';
	// 						} else {
	// 							// Hapus koma terakhir
	// 							$hasilDeteksi = rtrim($hasilDeteksi, ',');
	// 						}
	// 					} else {
	// 						$hasilDeteksi .= ' Tidak ada diagnosa';
	// 					}

	// 					return $hasilDeteksi;
	// 				}
	// 			}
	// 		}
	// 	}
	// }
	private function prosesDeteksiPenyakit($gejala)
	{
		// Inisialisasi hasil deteksi
		$hasilDeteksi = 'Tanaman Cabai Anda Mengalami:';

		if (!empty($gejala)) {
			// Rules 1
			$gejalaPilihan = count($gejala);
			if ($gejalaPilihan == 4 && in_array('gejala1', $gejala) && in_array('gejala2', $gejala) && in_array('gejala3', $gejala) && in_array('gejala4', $gejala)) {
				$hasilDeteksi .= ' Layu Fusarium (Fusarium Wilt)';
			}
			// Rules 2
			else if ($gejalaPilihan == 3 && in_array('gejala5', $gejala) && in_array('gejala6', $gejala) && in_array('gejala7', $gejala)) {
				$hasilDeteksi .= ' Busuk Phytophthora (Phytophthora rot)';
			}
			// Rules 3
			else if ($gejalaPilihan == 4 && in_array('gejala8', $gejala) && in_array('gejala9', $gejala) && in_array('gejala10', $gejala) && in_array('gejala11', $gejala)) {
				$hasilDeteksi .= ' Busuk Akar Ralstonia (Ralstonia root rot)';
			}
			// Rules 4
			else if ($gejalaPilihan == 3 && in_array('gejala12', $gejala) && in_array('gejala13', $gejala) && in_array('gejala14', $gejala)) {
				$hasilDeteksi .= ' Penyakit Hawar Daun (Leaf spot disease)';
			}
			// Rules 5
			else if ($gejalaPilihan == 3 && in_array('gejala15', $gejala) && in_array('gejala16', $gejala) && in_array('gejala17', $gejala)) {
				$hasilDeteksi .= ' Embun Tepung (Powdery mildew)';
			} else {
				$hasilDeteksi .= ' Tidak ada diagnosa';
			}
		} else {
			$hasilDeteksi .= ' Tidak ada diagnosa';
		}

		return $hasilDeteksi;
	}
}
