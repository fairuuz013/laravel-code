<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator Kurang</title>
</head>

<body>
    <h1>{{$title ?? 'pengurangan'}}</h1>
    <form action="{{route('store-kurang')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="">Angka 1</label>
            <input type="number" placeholder="masukan angka" name="angka1">
        </div>
        <br>
        <div class="mb-3">
            <label for="">Angka 2</label>
            <input type="number" placeholder="masukan angka" name="angka2">
        </div>
        <br>
        <button type="submit">Simpan</button>
        <a href="/belajar-laravel">Kembali</a>
    </form>

    <h3>Hasilnya adalah: {{$jumlah}}</h3>
</body>

</html>
