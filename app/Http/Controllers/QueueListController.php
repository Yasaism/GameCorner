<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QueueListController extends Controller
{
    public function index()
    {
        // Logika untuk menampilkan daftar antrian

        // Misalnya, kita hanya akan melempar view yang sederhana untuk saat ini
        return view('queue.list');
    }
}
