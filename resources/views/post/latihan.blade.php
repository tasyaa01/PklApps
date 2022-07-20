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
        <legend>Data</legend>
        <table border="1">
        <h3>Tabel Siswa</h3>
            <tr>
                <td>No Siswa</td>
                <td>Nama</td>
                <td>Jenis Kelamin</td>
                <td>Jurusan</td>
            </tr>
            
            @foreach($siswa as $siswa)
                <tr>
                    <td>{{$siswa['NoSISWA']}}</td>
                    <td>{{$siswa->NAMA}}</td>
                    <td>{{$siswa->JK}}</td>
                    <td>{{$siswa->JURUSAN}}</td>
                </tr>
            @endforeach
        </table>

        <table border="1">
        <h3>Tabel Peserta</h3>
            <tr>
                <td>No Siswa</td>
                <td>Kode MP</td>
            </tr>
            
            @foreach($peserta as $peserta)
                <tr>
                    <td>{{$peserta->NoSiswa}}</td>
                    <td>{{$peserta->Kode_MP}}</td>
                </tr>
            @endforeach
        </table>

        <table border="1">
        <h3>Tabel Mata Pelajaran</h3>
            <tr>
                <td>Kode MP</td>
                <td>Nama MP</td>
                <td>SKS</td>
                <td>Semester</td>
            </tr>
            
            @foreach($mapel as $mapel)
                <tr>
                    <td>{{$mapel->KODE_MP}}</td>
                    <td>{{$mapel->NAMA_MP}}</td>
                    <td>{{$mapel->SKS}}</td>
                    <td>{{$mapel->SEMESTER}}</td>
                </tr>
            @endforeach
        </table>
    </fieldset>
</body>
</html>