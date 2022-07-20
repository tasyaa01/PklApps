<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Data Siswa</legend>
        @foreach ($siswa as $murid)
            ID : {{$murid['id']}} <br>
            Nama : {{$murid['name']}} <br>
            Umur : {{$murid['age']}} Tahun <br>
            Status : 
            @if ($murid['age'] >= 17)
                Anda Berhak Mendapatkan KTP
            @else
                Anda Belum Berhak Mendapatkan KTP
            @endif

            @foreach ($murid['mapel'] as $mapel)
                <li>{{$mapel}}</li>
            @endforeach
            <hr>
        @endforeach
    </fieldset>
</body>
</html>