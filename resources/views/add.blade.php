@extends('master')

@section('title', 'Data Nilai')


@section('konten')

    <h3>Data Nilai Kuliah</h3>

    <a href="/kuliah" class="btn btn-primary"> <- Kembali</a>

    <br />
    <br />

    <form action="/kuliah/store" method="post" class="form-horizontal col-5">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="NRP" class="col">NRP</label>
            <input type="text" class="form-control col mb-2" placeholder="Masukkan NRP" name="NRP">
        </div>
        <div class="form-group row">
            <label for="NilaiAngka" class="col">Nilai Angka</label>
            <input type="text" class="form-control col mb-2" placeholder="Masukkan NilaiAngka" name="NilaiAngka">
        </div>
        <div class="form-group row">
            <label for="SKS" class="col">SKS</label>
            <input type="number" class="form-control col mb-2" placeholder="SKS" name="SKS">
        </div>
        <input type="submit" class="btn btn-warning mt-3" value="Simpan Data">

    </form>


@endsection
