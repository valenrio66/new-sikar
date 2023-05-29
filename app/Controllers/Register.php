<?php

namespace App\Controllers;

use App\Models\UserModel;

class Register extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Register',
        ];

        return view('register/header') . view('register', $data) . view('register/footer', $data);
    }

    public function rauth()
    {
        if (!$this->validate([
            'email' => [
                'rules' => 'required|valid_email|is_unique[user.email]',
                'errors' => [
                    'required' => '{field} Harus diisi dengan email yang valid',
                    'is_unique' => 'Email sudah digunakan sebelumnya'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[4]|max_length[10]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 8 Karakter',
                ]
            ],
            'nama' => [
                'rules' => 'required|min_length[4]|max_length[30]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 30 Karakter',
                ]
            ],
        ])) {
            $errors = $this->validator->getErrors();
            $firstError = reset($errors);
            session()->setFlashdata('error', $firstError);
            return redirect()->back()->withInput();
        }
        $users = new UserModel();
        $users->insert([
            'email' => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
            'nama' => $this->request->getVar('nama')
        ]);
        return redirect()->to('login/index')->with('message', 'Registrasi berhasil! Silakan login.');
    }
}
