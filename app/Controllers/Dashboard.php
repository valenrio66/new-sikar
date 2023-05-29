<?php

namespace App\Controllers;

// use App\Models\UserModel;

class Dashboard extends BaseController
{
    public function index()
    {
        // $model = new UserModel();
        $data = [
            'title' => 'Dashboard',
            // 'getUser' => $model->getUser(),
        ];

        return view('template_dashboard/header', $data) . view('dashboard') . view('template_dashboard/footer');
    }
}
