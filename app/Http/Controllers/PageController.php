<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function profile()
    {
        $nama = "Muhammad Khaliq Teuku Ansari";
        $nim = "2110817310008";
        $hobi = "Bermain Bola Voli";
        $cita_cita = "Jadi Orang Kaya";

        return view('page.profile', compact('nama', 'nim', 'hobi', 'cita_cita'));
    }

    public function kampus()
    {
        $univ = "Universitas Lambung Mangkurat";
        $alamat = "Jl. Brigjen Jl. Brig Jend. Hasan Basri, Pangeran, Kec. Banjarmasin Utara, Kota Banjarmasin, Kalimantan Selatan 70123";

        return view('page.kampus', compact('univ', 'alamat'));
    }
}