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
    
    <h4>Pesanan Ke-1</h4>
    @if ($a == 'Ayam Goreng')
        Pesanan : {{$a}}
        <br> 
        Harga {{$a}} : Rp.15000

    @elseif ($a == 'Lobster')
        Pesanan : {{$a}}
        <br> 
        Harga {{$a}} : Rp.20000

    @elseif ($a == 'Pizza')
        Pesanan : {{$a}}
        <br> 
        Harga {{$a}} : Rp.20000

    @elseif ($a == 'Tiramisu')
        Pesanan : {{$a}}
        <br> 
        Harga {{$a}} : Rp.30000

    @elseif ($a == 'Pasta')
        Pesanan : {{$a}}
        <br> 
        Harga {{$a}} : Rp.25000

    @else
        {{$c}}
    @endif

    <h4>Pesanan Ke-2</h4>
    @if ($b == 'Ayam Goreng')
        Pesanan : {{$b}}
        <br> 
        Harga {{$b}} : Rp.15000

    @elseif ($b == 'Lobster')
        Pesanan : {{$b}}
        <br> 
        Harga {{$b}} : Rp.20000

    @elseif ($b == 'Pizza')
        Pesanan : {{$b}}
        <br> 
        Harga {{$b}} : Rp.20000

    @elseif ($b == 'Tiramisu')
        Pesanan : {{$b}}
        <br> 
        Harga {{$b}} : Rp.30000

    @elseif ($b == 'Pasta')
        Pesanan : {{$b}}
        <br> 
        Harga {{$b}} : Rp.25000

    @else
        {{$c}}
    @endif
</body>
</html>