<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KuliahController extends Controller{
    public function nilai(){
       // mengambil data dari table pegawai
    	$nilaikuliah = DB::table('nilaikuliah')->get();

    	// mengirim data pegawai ke view nilai
    	return view('nilai',['nilaikuliah' => $nilaikuliah]);

    }
}
