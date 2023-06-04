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
			if ($gejalaPilihan == 2 && in_array('G1', $gejala) && in_array('G2', $gejala)) {
				$hasilDeteksi .= ' Hama Tanaman';
			}
			// Rules 2
			else if ($gejalaPilihan == 1 && in_array('G8', $gejala)) {
				$hasilDeteksi .= ' Layu Bakteri';
			}
			//aaa
			else if ($gejalaPilihan == 1 && in_array('G1', $gejala)) {
				$hasilDeteksi .= ' Bercak - Bercak Putih Bersudut';
			} else if ($gejalaPilihan == 2 && in_array('G3', $gejala) && in_array('G4', $gejala)) {
				$hasilDeteksi .= ' Tanaman Gagal Membentuk Buah';
			} else if ($gejalaPilihan == 1 && in_array('G14', $gejala)) {
				$hasilDeteksi .= ' Hama Tanaman';
			} else if ($gejalaPilihan == 1 && in_array('G3', $gejala)) {
				$hasilDeteksi .= ' Bercak - Bercak Putih Bersudut';
			} else if ($gejalaPilihan == 1 && in_array('G5', $gejala)) {
				$hasilDeteksi .= ' Munculnya Bercak Putih Berukuran Besar dengan Bentuk Tidak Teratur';
			} else if ($gejalaPilihan == 1 && in_array('G13', $gejala)) {
				$hasilDeteksi .= ' Penyakit Jamur Daun';
			} else if ($gejalaPilihan == 1 && in_array('G6', $gejala)) {
				$hasilDeteksi .= ' Buah Menjadi Tampak Basah dan Membusuk';
			} else if ($gejalaPilihan == 1 && in_array('G7', $gejala)) {
				$hasilDeteksi .= ' Penyakit Busuk Buah';
			} else if ($gejalaPilihan == 1 && in_array('G9', $gejala)) {
				$hasilDeteksi .= ' Bercak - Bercak Hitam pada Buah dengan Bagian Tengah Berwarna Putih';
			} else if ($gejalaPilihan == 1 && in_array('G10', $gejala)) {
				$hasilDeteksi .= ' Penyakit PATEK';
			} else if ($gejalaPilihan == 1 && in_array('G10', $gejala)) {
				$hasilDeteksi .= ' Penyakit PATEK';
			}
			// Rules 3
			else if ($gejalaPilihan == 3 && in_array('G9', $gejala) && in_array('G10', $gejala)) {
				$hasilDeteksi .= ' Penyakit PATEK';
			}
			// Rules 4
			else if ($gejalaPilihan == 2 && in_array('G11', $gejala) && in_array('G12', $gejala)) {
				$hasilDeteksi .= ' Penyakit Jamur Daun';
			}
			// Rules 5
			else if ($gejalaPilihan == 2 && in_array('G6', $gejala) && in_array('G7', $gejala)) {
				$hasilDeteksi .= ' Penyakit Busuk Buah';
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
			// Jika gejala tidak cocok dengan aturan yang ada
		} else {
			$hasilDeteksi .= ' Tidak ada diagnosa';
		}

		return $hasilDeteksi;
	}
}
