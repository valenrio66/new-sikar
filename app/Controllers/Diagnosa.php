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
		$gejala = $this->request->getVar('gejala');

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
		$hasilDeteksi = 'Tanaman Cabai Anda Mengalami:';

		if (!empty($gejala)) {
			$gejalaPilihan = count($gejala);
			if ($gejalaPilihan === 1 && $gejalaPilihan[0] === 'G1') {
				return redirect()->to(base_url('diagnosa/diagnosaG2'));
			} elseif ($gejalaPilihan === 1 && $gejalaPilihan[0] === 'G2') {
				$penyakit = 'P5';
				return view('diagnosa/hasil', ['penyakit' => $penyakit]);
			} elseif ($gejalaPilihan === 1 && $gejalaPilihan[0] === 'G3') {
				return redirect()->to(base_url('diagnosa/diagnosaG4'));
			} elseif ($gejalaPilihan === 1 && $gejalaPilihan[0] === 'G4') {
				return redirect()->to(base_url('diagnosa/diagnosaG14'));
			} elseif ($gejalaPilihan === 1 && $gejalaPilihan[0] === 'G5') {
				return redirect()->to(base_url('diagnosa/diagnosaG13'));
			} elseif ($gejalaPilihan === 1 && $gejalaPilihan[0] === 'G6') {
				return redirect()->to(base_url('diagnosa/diagnosaG7'));
			} elseif ($gejalaPilihan === 1 && $gejalaPilihan[0] === 'G9') {
				return redirect()->to(base_url('diagnosa/diagnosaG10'));
			} elseif ($gejalaPilihan === 1 && $gejalaPilihan[0] === 'G8') {
				$penyakit = 'P2';
				return view('diagnosa/hasil', ['penyakit' => $penyakit]);
			} elseif ($gejalaPilihan === 1 && $gejalaPilihan[0] === 'G11') {
				return redirect()->to(base_url('diagnosa/diagnosaG12'));
			} else {
				return redirect()->to(base_url('diagnosa'));
			}
		} else {
			$hasilDeteksi .= ' Tidak ada diagnosa';
		}

		return $hasilDeteksi;
	}


	public function diagnosaG2()
	{
		return view('diagnosaG2');
	}
	public function diagnosaG3()
	{
		return view('diagnosaG3');
	}
	public function diagnosaG4()
	{
		return view('diagnosaG4');
	}
	public function diagnosaG5()
	{
		return view('diagnosaG5');
	}
	public function diagnosaG6()
	{
		return view('diagnosaG6');
	}
	public function diagnosaG7()
	{
		return view('diagnosaG7');
	}
	public function diagnosaG8()
	{
		return view('diagnosaG8');
	}
	public function diagnosaG9()
	{
		return view('diagnosaG9');
	}
	public function diagnosaG10()
	{
		return view('diagnosaG10');
	}
	public function diagnosaG11()
	{
		return view('diagnosaG11');
	}
	public function diagnosaG12()
	{
		return view('diagnosaG12');
	}
	public function diagnosaG13()
	{
		return view('diagnosaG13');
	}
	public function diagnosa14()
	{
		return view('diagnosa14');
	}
}
