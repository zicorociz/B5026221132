@extends('master')

@section('title', 'Data Pegawai')

@section('konten')

	<h2>malasngoding corp</h2>
	<h3>Data Pegawai</h3>

	<a href="/pegawai/tambah" class="btn btn-primary"> + Tambah Pegawai Baru</a>

	<br/>
    <p>Cari Data Pegawai : berdasarkan nama</p>
	<form action="/pegawai/cari" method="GET">

		<input class="form-control" type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old("cari", isset($cari) ? $cari : '') }}">
		<input class="mt-1 mb-3 btn btn-primary" type="submit" value="CARI">
	</form>

	<table class="table table-striped table-hover">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
				<a href="/pegawai/view/{{ $p->pegawai_id }}" class="btn btn-success">View</a>
				<a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning">Edit</a>
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{$pegawai->links()}}
@endsection
