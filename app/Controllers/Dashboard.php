<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
        ];

        return view('template_dashboard/header') . view ('dashboard', $data) . view ('template_dashboard/footer', $data);
    }
}