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
        <legend><strong><i>Jadwal Tayang Televisi</i></strong></legend>
        @foreach($Televisi as $tv)
            <ul>
                <li type='none'><h3>{{$tv['siaran1']}}</h3></li>
                @foreach($tv['nettv'] as $acara)
                    <ul>
                        <li type='square'>Acara : {{$acara['acara']}}</li>
                        <li type='none'>Tanggal : {{$acara['tanggal']}}</li>
                        <li type='none'>Jam : {{$acara['jam']}}</li>
                        <br>
                    </ul>
                @endforeach

                <li type='none'><h3>{{$tv['siaran2']}}</h3></li>
                @foreach($tv['tvri'] as $acara)
                    <ul>
                        <li type='square'>Acara : {{$acara['acara']}}</li>
                        <li type='none'>Tanggal : {{$acara['tanggal']}}</li>
                        <li type='none'>Jam : {{$acara['jam']}}</li>
                        <br>
                    </ul>
                @endforeach

                <li type='none'><h3>{{$tv['siaran3']}}</h3></li>
                @foreach($tv['beinsport'] as $acara)
                    <ul>
                        <li type='square'>Acara : {{$acara['acara']}}</li>
                        <li type='none'>Tanggal : {{$acara['tanggal']}}</li>
                        <li type='none'>Jam : {{$acara['jam']}}</li>
                        <br>
                    </ul>
                @endforeach

                <li type='none'><h3>{{$tv['siaran4']}}</h3></li>
                @foreach($tv['ochannel'] as $acara)
                    <ul>
                        <li type='square'>Acara : {{$acara['acara']}}</li>
                        <li type='none'>Tanggal : {{$acara['tanggal']}}</li>
                        <li type='none'>Jam : {{$acara['jam']}}</li>
                        <br>
                    </ul>
                @endforeach

                <li type='none'><h3>{{$tv['siaran5']}}</h3></li>
                @foreach($tv['indosiar'] as $acara)
                    <ul>
                        <li type='square'>Acara : {{$acara['acara']}}</li>
                        <li type='none'>Tanggal : {{$acara['tanggal']}}</li>
                        <li type='none'>Jam : {{$acara['jam']}}</li>
                        <br>
                    </ul>
                @endforeach
            </ul>
        @endforeach
    </fieldset>
</body>
</html>