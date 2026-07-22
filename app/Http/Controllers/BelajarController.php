<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BelajarController extends Controller
{
    public function index()
    {
        $title = "belajar matematika dasar";
        return view('belajar');
    }



    //TAMBAH
    public function tambah()
    {
        $jumlah = 0;
        $title = "Penjumlahan";
        return view('tambah', compact('jumlah', 'title'));
    }


    public function storeTambah(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;

        $jumlah = $angka1 + $angka2;
        return view('tambah', compact('jumlah'));
    }



    // KURANG
    public function kurang()
    {
        $title = "Data pengurangan";
        $jumlah = 0;
        return view('kurang', compact('title', 'jumlah'));
    }

    public function storeKurang(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;

        $jumlah = max(0, $angka1 - $angka2);

        return view('kurang', compact('jumlah'));
    }



    //KALI
    public function kali()
    {
        $title = "kali";
        $jumlah = 0;
        return view('kali', compact('title', 'jumlah'));
    }

    public function storeKali(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;

        $jumlah = $angka1 * $angka2;

        return view('kali', compact('jumlah'));
    }



    // BAGI
        public function bagi()
    {
        $title = "bagi";
        $jumlah = 0;
        return view('bagi', compact('title', 'jumlah'));
    }

    public function storeBagi(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;

        $jumlah = $angka1 / $angka2;

        return view('bagi', compact('jumlah'));
    }

}
