<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    public function index()
    {
        // Logika untuk menampilkan halaman reservasi

        // Misalnya, kita hanya akan melempar view yang sederhana untuk saat ini
        return view('reservasi.index');
    }

    public function store(){
        $user = User::
    }
}
