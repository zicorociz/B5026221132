@extends('master')

@section('title', 'Lihat data Mahasiswa')

@section('konten')
    <title>View Data Mahasiswa</title>


    <h3>Lihat Data Mahasiwa</h3>

    <a href="/mahasiswa" class="btn btn-primary"> <-Kembali</a>
    <br/>
    <br/>

    @foreach ($mahasiswa as $m)
        <form action="/mahasiswa/store" method="post">
            {{ csrf_field() }}
            <div class="col-3 bg-primary p-4 rounded rounded-5">
                    <h3>Data Mahasiswa</h3>
                    <h5>NRP : {{ $m->NRP }} </h5>
                    <h5>Nama : {{ $m->Nama }} </h5>
                    <h5>Jurusan : {{ $m->Jurusan }} </h5>
                    <h5>IPK : {{ $m->IPK }} </h5>

                <a class="btn btn-success" href="/mahasiswa">OK</a>
              </div>

        </form>
    @endforeach


@endsection
