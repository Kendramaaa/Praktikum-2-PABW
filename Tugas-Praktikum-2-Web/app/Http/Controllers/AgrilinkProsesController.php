<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgrilinkProsesController extends Controller
{
    // Menampilkan halaman form input
    public function index()
    {
        return view('input');
    }

    // Memproses data dan menghitung total nilai inventaris
    public function store(Request $request)
    {
        $nama_produk = $request->input('nama_produk');
        $kategori = $request->input('kategori');
        $harga = $request->input('harga');
        $stok = $request->input('stok');
        $nama_petani = $request->input('nama_petani');

        // Proses pengolahan data: Menghitung total nilai aset/stok
        $total_nilai = $harga * $stok;

        return view('hasil', compact(
            'nama_produk',
            'kategori',
            'harga',
            'stok',
            'nama_petani',
            'total_nilai'
        ));
    }
}

