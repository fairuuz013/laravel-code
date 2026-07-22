<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Laravel</title>
</head>

<body>
    <h1>{{$title ?? ''}}</h1>
    <a href="{{route('penjumlahan')}}">Tambah</a>
    <a href="{{route('pengurangan') }}">Kurang</a>
    <a href="{{route('pembagian') }}">Bagi</a>
    <a href="{{route('perkalian') }}">Kali</a>

<br><br>

    <div class="content">
      @yield('content')

    </div>
</body>

</html>
