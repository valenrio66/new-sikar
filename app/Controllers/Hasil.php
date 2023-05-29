<?php

namespace App\Controllers;

class Hasil extends BaseController
{
    public function index()
    {
        return view('template_dashboard/header') . view('hasil') . view('template_dashboard/footer');
    }
}
