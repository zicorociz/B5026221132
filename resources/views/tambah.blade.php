<!DOCTYPE html>
<html>
<head>
    {{-- Link Boostrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous" />
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
    <style>
        form {
            display: grid;
            grid-template-columns: max-content 1fr;
            gap: 10px;
            max-width: 400px;
            margin: auto;
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
            grid-column: span 2; /* Make the submit button span two columns for full width */
        }
        .row .col-4{
            width: 200px; /* Lebar persegi panjang */
            height: auto; /* Tinggi persegi panjang */
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
            <div class="col-6">
                <form action="/pegawai/store" method="post">
                    {{ csrf_field() }}
                    Nama <input type="text" name="nama" required="required"> <br/>
                    Jabatan <input type="text" name="jabatan" required="required"> <br/>
                    Umur <input type="number" name="umur" required="required"> <br/>
                    Alamat <textarea name="alamat" required="required"></textarea> <br/>
                    <input type="submit" value="OK">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
