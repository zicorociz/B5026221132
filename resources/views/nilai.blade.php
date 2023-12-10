@extends('master')

@section('title', 'Data Nilai')


@section('konten')


	<h2>Institut Teknologi Sepuluh Nopember</h2>
	<h3>Data kuliah</h3>



	<br/>
	<br/>
    <a href="kuliah/tambah" class="btn btn-primary mb-3">+ Tambah Nilai Mahasiswa</a>
    <br/>
    <p>Cari Data Mahasiswa : berdasarkan nama</p>
	<form action="/kuliah/cari" method="GET">

		<input class="form-control" type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old("cari", isset($cari) ? $cari : '') }}">
		<input class="mt-1 mb-3 btn btn-primary" type="submit" value="CARI">
	</form>

	<table class="table table-striped">
		<tr class="table-primary">
			<th>ID</th>
			<th>NRP</th>
			<th>Nilai Angka</th>
			<th>SKS</th>
			<th>Nilai Huruf</th>
			<th>Bobot</th>
		</tr>
		@foreach($nilaikuliah as $k)
<tr >
	<td >{{ $k->ID }}</td>
	<td >{{ $k->NRP }}</td>
	<td >{{ $k->NilaiAngka }}</td>
	<td >{{ $k->SKS }}</td>
    <td>
        @if ($k->NilaiAngka <= 40)
            D
        @elseif ($k->NilaiAngka >= 41 && $k->NilaiAngka <= 60)
            C
        @elseif ($k->NilaiAngka >= 61 && $k->NilaiAngka <= 80)
            B
        @else
            A
        @endif
    </td>
    <td>
        {{$k->SKS * $k->NilaiAngka}}
    </td>

</tr>
@endforeach
	</table>


    @endsection
