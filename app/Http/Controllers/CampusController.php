<?php

namespace App\Http\Controllers;

class CampusController extends Controller
{
    public function beranda()
    {
        return view('beranda');
    }

    public function kontak()
    {
        $kontak = [
            'alamat' => 'Itech Jl. Asem Dua No.22, RT.11/RW.5, Cipete Selatan, Kecamatan Cilandak, Kota Jakarta Selatan, DKI Jakarta 12410',
            'email' => 'info@i-tech.ac.id',
            'telepon' => '021-215715870'
        ];

        return view('kontak', compact('kontak'));
    }
}