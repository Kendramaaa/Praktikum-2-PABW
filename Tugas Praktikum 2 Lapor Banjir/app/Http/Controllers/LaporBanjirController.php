<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporBanjirController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        // Mengambil data dari form tanpa database
        $data = [
            'nama' => $request->input('nama'),
            'lokasi' => $request->input('lokasi'),
            'tinggi' => $request->input('tinggi'),
        ];

        // Mengembalikan data ke halaman konfirmasi
        return view('konfirmasi', $data);
    }
}
