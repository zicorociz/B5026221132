@extends('master')

@section('title', 'Data Bagian')


@section('konten')


	<h2>Institut Teknologi Sepuluh Nopember</h2>
	<h3>Data kuliah</h3>

	<br/>
	<br/>
    <a href="/beranda/tambahNama" class="btn btn-primary mb-3">+ Tambah Data Bagian</a>

	<table class="table table-striped">
		<tr class="table-primary">
			<th>Kode Bagian</th>
			<th>Nama bagian</th>
			<th>Jumlah Bagian</th>
			<th>Tersedia</th>
		</tr>
		@foreach($bagian as $b)
<tr >
	<td >{{ $b->kode_bagian }}</td>
	<td >{{ $b->nama_bagian }}</td>
	<td >{{ $b->jumlah_bagian }}</td>
	<td >
        @if ($b->tersedia == '1')
            Tersedia
        @else
            Tidak Tersedia
        @endif
    </td>

</tr>
@endforeach
	</table>


    @endsection
