<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous" />
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2>www.malasngoding.com</h2>
	<h3>Data Pegawai</h3>

	<a href="/pegawai/tambah" class="btn btn-primary"> + Tambah Pegawai Baru</a>

	<br/>
	<br/>

	<table class="border border-2 border-dark">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
<tr class="border border-2 border-dark">
	<td class="border border-2 border-dark ">{{ $p->pegawai_nama }}</td>
	<td class="border border-2 border-dark text-center p-2">{{ $p->pegawai_jabatan }}</td>
	<td class="border border-2 border-dark text-center p-2">{{ $p->pegawai_umur }}</td>
	<td class="border border-2 border-dark ">{{ $p->pegawai_alamat }}</td>
	<td class="border border-2 border-dark ">
		<a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning mb-2">Edit</a>
		<a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger">Hapus</a>
	</td>
</tr>
@endforeach
	</table>


</body>
</html>
