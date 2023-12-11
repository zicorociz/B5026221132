@extends('master')

@section('title', 'Data Pegawai')


@section('konten')

    <h3>Data Pegawai</h3>

    <a href="/mahasiswa"> Kembali</a>

    <br />
    <br />
<div class="bg-primary p-3 rounded rounded-5">
    <center>
    <form action="/mahasiswa/store" method="post" class="form-horizontal col-5">
        {{ csrf_field() }}
        <div class="form-group row mb-3">
            <label for="nama" class="col">NRP</label>
            <input type="number" class="form-control col" placeholder="Masukkan NRP" name="NRP">
        </div>
        <div class="form-group row mb-3">
            <label for="jabatan" class="col">Nama</label>
            <input type="text" class="form-control col" placeholder="Masukkan Nama" name="Nama">
        </div>
        <div class="form-group row mb-3">
            <label for="umur" class="col">Jurusan</label>
            <input type="text" class="form-control col" placeholder="Masukan Umur" name="Jurusan">
        </div>
        <div class="form-group row mb-3">
            <label for="umur" class="col">IPK</label>
            <input type="number" class="form-control col" placeholder="Masukan IPK" name="IPK" step="any">
        </div>


        <input type="submit" class="btn btn-success mt-3" value="Simpan Data">

    </form>
    </center>
</div>
@endsection
