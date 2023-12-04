<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Link Boostrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous" />

    <title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
    <style>

        form {
            display: grid;
            grid-template-columns: max-content 1fr;
            gap: 10px;
            max-width: 400px;

        }

        form label {
            text-align: right;
            padding-right: 10px;
        }

        form input,
        form textarea {
            box-sizing: border-box;
            width: 100%;
        }

        form input[type="submit"] {
            grid-column: span 2;
        }

        .row .col-4{
            width: 200px;
            height: auto;
            border: 2px solid #3498db
        }
    </style>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>
    <div class="container">
        <div class="row">
            <div class="col-4" ></div>
            <div class="col-6">@foreach($pegawai as $p)
                <form action="/pegawai/store" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>

                    Nama <input class="border border-primary" type="text" readonly class = "form-control" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br/>
                    Jabatan <input class="border border-primary" type="text" readonly class = "form-control" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br/>
                    Umur <input class="border border-primary" type="number" readonly class = "form-control" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br/>
                    Alamat <textarea class="border border-primary" readonly class = "form-control" required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br/>
                    <input class="btn btn-warning" type="submit" value="OK">
                </form>
                @endforeach</div>
        </div>
    </div>








</body>
</html>
