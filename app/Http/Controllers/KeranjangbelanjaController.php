<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangbelanjaController extends Controller
{
    public function index()
    {
        $keranjangbelanja = DB::table('keranjangbelanja')->get();
        return view('keranjangbelanja.index', ['keranjangbelanja' => $keranjangbelanja]);
    }
    public function tambah()
    {
        return view('keranjangbelanja.tambah');
    }
    public function store(Request $request)
    {
        // insert data ke table keranjangbelanja
        DB::table('keranjangbelanja')->insert([
            'keranjangbelanja_ID' => $request->ID,
            'keranjangbelanja_KodeBarang' => $request->KodeBarang,
            'keranjangbelanja_Jumlah' => $request->Jumlah,
            'keranjangbelanja_Harga' => $request->Harga,
        ]);
        // alihkan halaman ke halaman keranjangbelanja
        return redirect('/keranjangbelanja');
    }
    // method untuk hapus data
    public function hapus($id)
    {
        // menghapus data keranjangbelanja berdasarkan id yang dipilih
        DB::table('keranjangbelanja')->where('id', $id)->delete();

        // alihkan halaman ke halaman keranjangbelanja
        return redirect('/keranjangbelanja');
    }
}
