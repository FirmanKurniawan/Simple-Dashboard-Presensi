<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PythonController extends Controller
{
    public function runScript()
    {
        $output = shell_exec('python C:\Users\FIRMAN\Documents\MAGNET\server.py 2>&1');
        return redirect('/presensi');
    }
}
