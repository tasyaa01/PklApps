<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h1>Restoran</h1></center>
    @if ($a == 'Ayam Goreng')
        <br> Pesanan : {{$a}}
        <br> Harga {{$a}} : Rp.15000
    @elseif ($a == 'Pizza')
        <br> Pesanan : {{$a}}
        <br> harga {{$a}} Rp.20000
    @elseif ($a == 'Tiramisu')
        <br> Pesanan : {{$a}}
        <br> harga {{$a}} Rp.30000
    @elseif ($a == 'Pasta')
        <br> Pesanan : {{$a}}
        <br> harga {{$a}} Rp.25000
    @else
        <br>
        {{$a}}
    @endif
</body>
</html>