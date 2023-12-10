@extends('master')

@section('title', 'Data Bagian')


@section('konten')

    <h3>Data Nilai Kuliah</h3>

    <a href="/beranda" class="btn btn-primary"> <- Kembali</a>

    <br />
    <br />

    <form action="/beranda/store" method="post" class="form-horizontal col-5">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="nama" class="col">Nama Bagian</label>
            <input type="text" class="form-control col mb-2" placeholder="Masukkan Nama Bagian" name="nama">
        </div>
        <div class="form-group row">
            <label for="jumlah" class="col">Jumlah Bagian</label>
            <input type="text" class="form-control col mb-2" placeholder="Masukkan Jumlah Bagian" name="jumlah">
        </div>
        <div class="form-group row">
            <label for="jumlah" class="col">Opsi</label>
            <select class="form-select col mb-2 me-2" id="tersedia" name="tersedia">
                <option selected>Choose...</option>
                <option value="1">Tersedia</option>
                <option value="2">Tidak Tersedia</option>
            </select>

        </div>
        <input type="submit" class="btn btn-warning mt-3" value="Simpan Data">

    </form>


@endsection
