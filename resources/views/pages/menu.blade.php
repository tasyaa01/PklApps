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
        @foreach ($Menu as $menupilihan)
            <li>{{$menupilihan['menu1']}}</li>
            <li>{{$menupilihan['menu2']}}</li>

            @foreach ($Menu as $menupilihan)
                <ul type="square">
                    <li>{{$menupilihan['ktgr']}}</li>
                </ul>
                @foreach ($menupilihan['jenisOR'] as $olahraga)
                    <ul>
                        <ul>
                            <li>{{$olahraga}}</li>
                        </ul>
                    </ul>
                @endforeach
            @endforeach

            @foreach ($menupilihan['kategori'] as $kategori)
                <ul type="square">
                    <li>{{$kategori}}</li>
                </ul>
            @endforeach

            <li>{{$menupilihan['menu3']}}</li>
        @endforeach
    </fieldset>
</body>
</html>