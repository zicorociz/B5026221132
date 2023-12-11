@extends('master')

@section('title', 'Data Mahasiswa')

@section('konten')

	<h2>Selamat datang di data Mahasiswa</h2>
	<h3>Data Mahasiswa</h3>

	<a href="/mahasiswa/mtambah" class="btn btn-primary"> + Tambah Data Mahasiswa</a>

	<br/>
    {{-- <p>Cari Data Pegawai : berdasarkan nama</p>
	<form action="/pegawai/cari" method="GET">

		<input class="form-control" type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old("cari", isset($cari) ? $cari : '') }}">
		<input class="mt-1 mb-3 btn btn-primary" type="submit" value="CARI">
	</form> --}}

	<table class="table table-striped table-hover mt-3">
		<tr>
			<th>NRP</th>
			<th>Nama</th>
			<th>Jurusan</th>
			<th>IPK</th>
			<th>Opsi</th>
		</tr>
		@foreach($mahasiswa as $m)
		<tr>
			<td>{{ $m->NRP }}</td>
			<td>{{ $m->Nama }}</td>
			<td>{{ $m->Jurusan }}</td>
			<td>{{ $m->IPK }}</td>
			<td>
				<a href="/mahasiswa/mview/{{ $m->NRP }}" class="btn btn-success">View</a>
				<a href="/mahasiswa/medit/{{ $m->NRP }}" class="btn btn-warning">Edit</a>
			</td>
		</tr>
		@endforeach
	</table>
        {{-- {{ $pegawai->links() }} --}}
@endsection
