<?php

namespace App\Http\Controllers;

class ProgramStudiController extends Controller
{
    public function index()
    {
        $programStudi = [
            [
                'nama' => 'Sistem Informasi',
                'jenjang' => 'S1'
            ],
            [
                'nama' => 'Teknik Informatika',
                'jenjang' => 'S1'
            ],
            
        ];

        return view('program-studi', compact('programStudi'));
    }
}