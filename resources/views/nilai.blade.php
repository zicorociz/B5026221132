<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous" />
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2>www.malasngoding.com</h2>
	<h3>Data kuliah</h3>

	<br/>
	<br/>

	<table class="table table-striped">
		<tr>
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


</body>
</html>
