<?php

namespace App\Controllers\Pegawai;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function index()
    {
        $data['title'] = 'Dashboard';
        return view('pages/pegawai/dashboard', $data);
    }
}
