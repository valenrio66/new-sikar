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
			} // Buat daftar penyakit dengan bobot keyakinan awal
			$penyakit = [
				'Penyakit Busuk Buah' => 0.2,
				'Layu Bakteri' => 0.2,
				'Penyakit PATEK' => 0.2,
				'Penyakit Jamur Daun' => 0.2,
				'Hama Tanaman' => 0.2
			];

			// Hitung total bobot
			$totalBobot = array_sum($penyakit);

			// Hitung bobot untuk penyakit yang tidak ada di rules
			$bobotTidakCocok = 1 - $totalBobot;

			// Tambahkan penyakit dengan bobot keyakinan
			$penyakit['Tidak ada diagnosa yang tepat'] = $bobotTidakCocok;

			// Ambil penyakit secara acak berdasarkan bobot keyakinan
			$randomDiagnosis = $this->getRandomDiagnosis($penyakit);
			$confidence = $penyakit[$randomDiagnosis] * 100;

			$hasilDeteksi .= ' ' . $randomDiagnosis . ' (Kepercayaan: ' . $confidence . '%)';
			// Jika gejala tidak cocok dengan aturan yang ada
		} else {
			$hasilDeteksi .= ' Tidak ada diagnosa';
		}

		return $hasilDeteksi;
	}

	private function getRandomDiagnosis($penyakit)
	{
		// Normalisasi bobot
		$totalBobot = array_sum($penyakit);
		$normalizedBobot = [];

		foreach ($penyakit as $diagnosis => $bobot) {
			$normalizedBobot[$diagnosis] = $bobot / $totalBobot;
		}

		// Pilih diagnosis secara acak berdasarkan bobot keyakinan
		$randomNumber = mt_rand() / mt_getrandmax();
		$cumulativeProbability = 0;

		foreach ($normalizedBobot as $diagnosis => $probability) {
			$cumulativeProbability += $probability;
			if ($randomNumber <= $cumulativeProbability) {
				return $diagnosis;
			}
		}

		// Jika terjadi kesalahan, kembalikan diagnosis secara acak
		$diagnoses = array_keys($penyakit);
		$randomIndex = array_rand($diagnoses);
		return $diagnoses[$randomIndex];
	}
}
