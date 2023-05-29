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

		if (empty($gejala)) {
			return view('template_dashboard/header') . view('dashboard', ['hasilDeteksi' => 'Pilih gejala terlebih dahulu']) . view('template_dashboard/footer');
		}

		// Deteksi penyakit berdasarkan gejala
		$hasilDeteksi = $this->prosesDeteksiPenyakit($gejala);

		// Menampilkan view hasil diagnosa
		return view('template_dashboard/header') . view('hasil', ['hasilDeteksi' => $hasilDeteksi]) . view('template_dashboard/footer');
	}

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
				// Tambahkan variasi respon untuk hasil yang tidak cocok dengan aturan yang ada
				$randomResponses = [
					' Tidak ada diagnosa yang tepat',
					' Tidak dapat menentukan penyakit dengan gejala yang diberikan',
					' Mohon maaf, tidak dapat mendeteksi penyakit berdasarkan gejala yang diberikan'
				];
				$randomIndex = array_rand($randomResponses);
				$hasilDeteksi .= $randomResponses[$randomIndex];
			}
		} else {
			$hasilDeteksi .= ' Tidak ada diagnosa';
		}

		return $hasilDeteksi;
	}
}
