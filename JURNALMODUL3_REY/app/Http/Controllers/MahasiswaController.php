<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        // ==================2==================
        // - Buat object mahasiswa dengan data dummy (nama, nim, email, jurusan, fakultas, foto)
        // - Kirim object tersebut ke view 'profil'
        $mahasiswa = [
            'nama' => 'Muhammad Rayhan Ramadhan',
            'nim' => '102022330145',
            'email' => 'muhrayhanramadhan@student.telkomuniversity.ac.id',
            'jurusan' => 'Sistem Informasi',
            'fakultas' => 'Fakultas Rekayasa Industri',
            'foto' => 'images/contoh.png'
        ];

        return view('profil', ['mahasiswa' => $mahasiswa]);
    }
}
