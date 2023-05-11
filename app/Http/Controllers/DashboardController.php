<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.body');
    }

    public function diagnosa()
    {
        return view('pasien.diagnosa.form');
    }

    public function edukasi()
    {
        return view('pasien.layouts.edukasi');
    }

    public function tentang()
    {
        return view('pasien.layouts.tentang');
    }
}
