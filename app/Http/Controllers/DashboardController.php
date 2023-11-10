<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Presensi;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function presensi()
    {
        $datas = Presensi::orderBy('created_at', 'DESC')->get();
        return view('dashboard.data_presensi', compact('datas'));
    }
}
