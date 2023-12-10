<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous" />
    <title>@yield('title')</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="#"><img src="ets/Zico..png" alt=""></a>

        <!-- Links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/pegawai">Pegawai</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/kuliah">Kuliah</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/beranda">Bagian</a>
          </li>
        </ul>
      </nav>
      <br>
      <div class="container">
        @yield('konten')
      </div>

      @include('footer')
</body>
</html>
