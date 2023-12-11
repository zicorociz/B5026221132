@extends('master')

@section('title', 'Data Mahasiswa')

@section('konten')

	<h2>malasngoding corp</h2>
	<h3>Edit data mahasiswa</h3>

	<br/>
    <a href="/mahasiswa" class="btn btn-primary mb-4"> <-Kembali</a>

		@foreach($mahasiswa as $m)
	<form action="/mahasiswa/update" method="post">
		{{ csrf_field() }}
        <div class="form-group row mb-3">
            <label for="nama" class="col">NRP</label>
            <input type="number" class="form-control col" placeholder="Masukkan NRP" name="NRP" value="{{ $m->NRP }}">
        </div>
        <div class="form-group row mb-3">
            <label for="jabatan" class="col">Nama</label>
            <input type="text" class="form-control col" placeholder="Masukkan Nama" name="Nama" value="{{ $m->Nama }}">
        </div>
        <div class="form-group row mb-3">
            <label for="umur" class="col">Jurusan</label>
            <input type="text" class="form-control col" placeholder="Masukan Umur" name="Jurusan" value="{{ $m->Jurusan }}">
        </div>
        <div class="form-group row mb-3">
            <label for="umur" class="col">IPK</label>
            <input type="number" class="form-control col" placeholder="Masukan IPK" name="IPK" value="{{ $m->IPK }}" step="any">
        </div>
		<input type="submit" class="btn btn-success" value="Simpan Data">
	</form>
	@endforeach

@endsection
