<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PythonController extends Controller
{
    public function runScript()
    {
        $pythonScriptPath = base_path('\public\python_scripts\test.py');
        $output = shell_exec('python C:\Users\FIRMAN\Documents\MAGNET\dmr.py');
        return redirect('/data-dht22');
    }
}
