<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BagianController extends Controller{

    public function beranda()
	{
    	// mengambil data dari table nilaikuliah
		// $nilaikuliah = DB::table('nilaikuliah')->get();
        $bagian = DB::table('bagian')->paginate(10);

    	// mengirim data nilaikuliah ke view index
		return view('beranda',['bagian' => $bagian]);

	}

    public function tambahNama()
	{

		// memanggil view tambah
		return view('tambahNama');

	}

    public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('bagian')->insert([
            'kode_bagian' => $request->kode,
            'nama_bagian' => $request->nama,
            'jumlah_bagian' => $request->jumlah,
            'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/beranda');

	}

}
