<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KuliahController extends Controller
{
	public function nilai()
	{
    	// mengambil data dari table nilaikuliah
		// $nilaikuliah = DB::table('nilaikuliah')->get();
        $nilaikuliah = DB::table('nilaikuliah')
                    ->get();

    	// mengirim data nilaikuliah ke view index
		return view('nilai',['nilaikuliah' => $nilaikuliah]);

	}

    public function tambah()
	{

		// memanggil view tambah
		return view('add');

	}

    public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('nilaikuliah')->insert([
            'ID' => $request->ID,
            'NRP' => $request->NRP,
            'NilaiAngka' => $request->NilaiAngka,
            'SKS' => $request->SKS
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/kuliah');

	}

}
