<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Masuk | Login',
        ];

        return view('login/header', $data) . view('login', $data) . view('login/footer', $data);
    }

    public function lauth()
    {
        $users = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $dataUser = $users->where([
            'email' => $email,
        ])->first();
        if ($dataUser) {
            if (password_verify($password, $dataUser->password)) {
                session()->set([
                    'email' => $dataUser->email,
                    'nama' => $dataUser->nama,
                    'logged_in' => TRUE
                ]);

                // Masuk ke halaman login
                return redirect()->to(base_url('dashboard/index'))->with('message', 'Berhasil Login!');
            } else {
                session()->setFlashdata('error', 'Email & Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Invalid');
            return redirect()->back();
        }
    }

    function logout()
    {
        session()->destroy();
        return redirect()->to('login/index');
    }
}
