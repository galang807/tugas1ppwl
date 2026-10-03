<?php

namespace App\Http\Controllers;

class ArchitectureController extends Controller
{
    public function dashboard()
    {
        $struktur = [
            [
                'nama' => 'app/',
                'fungsi' => 'Tempat kode utama aplikasi Laravel.'
            ],
            [
                'nama' => 'app/Http/Controllers/',
                'fungsi' => 'Menyimpan Controller untuk mengatur proses aplikasi.'
            ],
            [
                'nama' => 'resources/views/',
                'fungsi' => 'Menyimpan tampilan Blade.'
            ],
            [
                'nama' => 'routes/web.php',
                'fungsi' => 'Mendefinisikan route aplikasi web.'
            ],
            [
                'nama' => 'database/',
                'fungsi' => 'Menyimpan migration, seeder, dan kebutuhan database.'
            ],
            [
                'nama' => 'public/',
                'fungsi' => 'Folder yang dapat diakses secara publik.'
            ],
            [
                'nama' => 'config/',
                'fungsi' => 'Menyimpan konfigurasi aplikasi.'
            ],
            [
                'nama' => 'artisan',
                'fungsi' => 'Command-line interface untuk menjalankan perintah Laravel.'
            ]
        ];

        return view('architecture', compact('struktur'));
    }

    public function lifecycle()
    {
        return view('lifecycle');
    }

    public function environment()
    {
        $environment = [
            'app_name' => config('app.name'),
            'laravel_version' => app()->version(),
            'php_version' => PHP_VERSION,
            'environment' => app()->environment()
        ];

        return view('environment', compact('environment'));
    }
}