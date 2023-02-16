<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class DashboardController extends Controller
{
    //
    public function admin()
    {
        $kelas = Kelas::select('id', 'nama_kelas')->get();
        return view('dashboard.admin', compact('kelas'));
    }

    public function petugas()
    {
        return view('dashboard.petugas');  
    }
}
