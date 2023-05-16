<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['title'] = 'Sistem Pakar Cabai';

        return view('templates/header', $data) . view('penyakit', $data) . view('templates/footer', $data);
    }
}
