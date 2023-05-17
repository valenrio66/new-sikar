<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
		$data = [
			'title' => 'Masuk | Login',
		];

		return view('templates/header', $data) . view('login', $data) . view('templates/footer', $data);
    }

    public function authenticate()
    {
        // Ambil data email dan password dari input form
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Proses validasi dan otentikasi pengguna
        if ($email === 'user@example.com' && $password === 'password') {
            // Jika autentikasi berhasil, lakukan sesuatu (misalnya, redirect ke halaman lain)
            return redirect()->to('dashboard/index');
        } else {
            // Jika autentikasi gagal, tampilkan pesan error dan kembali ke halaman login
            return redirect()->back()->with('error', 'Invalid email or password');
        }
    }
}