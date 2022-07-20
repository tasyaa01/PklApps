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
        <legend>Data Dosen</legend>
        @foreach ($Dosen as $dosen)
            <li type='none'>Nama Dosen : {{$dosen['dosen']}}</li>
            <li type='none'>Mata Kuliah : {{$dosen['matkul']}}</li>
            <li type='none'>Mahasiswa : </li>
            <?php $nilai = 0?>

            @foreach ($dosen['mahasiswa'] as $mahasiswa)
                <ul>
                    <li type='none'>Nama Mahasiswa : {{$mahasiswa['nama']}}</li>
                    <li type='none'>Nilai : {{$mahasiswa['nilai']}}</li>

                    @if ($mahasiswa['nilai'] >= 90 && $mahasiswa['nilai'] = 100)
                        <li type='none'>Grade : A </li>

                    @elseif ($mahasiswa['nilai'] >= 80 && $mahasiswa['nilai'] <= 89)
                        <li type='none'>Grade : B </li>
            
                    @elseif ($mahasiswa['nilai'] >= 70 && $mahasiswa['nilai'] <= 79)
                        <li type='none'>Grade : C </li>

                    @elseif ($mahasiswa['nilai'] >= 50 && $mahasiswa['nilai'] <=69)
                        <li type='none'>Grade : D </li>

                    @elseif ($mahasiswa['nilai'] > 0 && $mahasiswa['nilai'] <=49 )
                        <li type='none'>Grade : E  </li>

                    @else
                        Grade Tidak Ada
                    @endif
                    <?php $nilai += $mahasiswa['nilai'] ?>
                </ul>
            @endforeach
            <br><b>Total = {{$nilai}}</b>
            <br><b>Rata-Rata = {{$nilai / count($dosen['mahasiswa'])}}</b>
            @if ($nilai >= 90 && $nilai = 100)
                <li type='none'>Grade : A </li>

            @elseif ($nilai >= 80 && $nilai <= 89)
                <li type='none'>Grade : B </li>
            
            @elseif ($nilai >= 70 && $nilai <= 79)
                <li type='none'>Grade : C </li>

            @elseif ($nilai >= 50 && $nilai <=69)
                <li type='none'>Grade : D </li>

            @elseif ($nilai > 0 && $nilai <=49 )
                <li type='none'>Grade : E  </li>

            @else
                Grade Tidak Ada
            @endif
            <hr>
        @endforeach
    </fieldset>
</body>
</html>
