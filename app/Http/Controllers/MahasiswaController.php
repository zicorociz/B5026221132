<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function mindex()
    {
    	// mengambil data dari table pegawai
    	// $pegawai = DB::table('pegawai')->get();
        $mahasiswa = DB::table('mahasiswa')->get();

    	// mengirim data pegawai ke view index
    	return view('mindex',['mahasiswa' => $mahasiswa]);

    }
    public function tambah()
    {

        // memanggil view tambah
        return view('mtambah');

    }
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('mahasiswa')->insert([
            'NRP' => $request->NRP,
            'Nama' => $request->Nama,
            'Jurusan' => $request->Jurusan,
            'IPK' => $request->IPK
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/mahasiswa');

    }
    public function edit($NRP)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $mahasiswa = DB::table('mahasiswa')->where('NRP',$NRP)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('medit',['mahasiswa' => $mahasiswa]);

    }
    public function update(Request $request)
    {
        // update data pegawai
        DB::table('mahasiswa')->where('NRP',$request->NRP)->update([
            'NRP' => $request->NRP,
            'Nama' => $request->Nama,
            'Jurusan' => $request->Jurusan,
            'IPK' => $request->IPK
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/mahasiswa');
    }
    public function view($NRP)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$mahasiswa = DB::table('mahasiswa')->where('NRP',$NRP)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('mview',['mahasiswa' => $mahasiswa]);

	}
}
