<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhotelan</title>
</head>
<body>
    <fieldset>
        <legend><strong><i>HOTEL</i></strong></legend>
        <table border="1">
        <h3>Pengunjung</h3>
            <tr>
                <td>ID Pengunjung</td>
                <td>Nama Pengunjung</td>
                <td>Alamat</td>
                <td>Jenis Kelamin</td>
                <td>NO Telepon</td>
                <td>No KTP</td>
            </tr>

            @foreach ($pengunjung as $pengunjung)
            <tr>
                <td>{{$pengunjung['id_pengunjung']}}</td>
                <td>{{$pengunjung->nm_pengunjung}}</td>
                <td>{{$pengunjung->alamat}}</td>
                <td>{{$pengunjung->jk}}</td>
                <td>{{$pengunjung->no_tlpn}}</td>
                <td>{{$pengunjung->no_ktp}}</td>
            </tr>
            @endforeach
        </table>

        <table border="1">
        <h3>Karyawan</h3>
            <tr>
                <td>ID Karyawan</td>
                <td>Nama Karyawan</td>
                <td>Jenis Kelamin</td>
            </tr>

            @foreach ($karyawan as $karyawan)
            <tr>
                <td>{{$karyawan->id_karyawan}}</td>
                <td>{{$karyawan->nm_karyawan}}</td>
                <td>{{$karyawan->jk}}</td>
            </tr>
            @endforeach
        </table>

        <table border="1">
        <h3>Kamar</h3>
            <tr>
                <td>No Kamar</td>
                <td>Jenis Kamar</td>
                <td>Harga</td>
            </tr>

            @foreach ($kamar as $kamar)
            <tr>
                <td>{{$kamar->no_kamar}}</td>
                <td>{{$kamar->jenis_kamar}}</td>
                <td>{{$kamar->harga}}</td>
            </tr>
            @endforeach
        </table>

        <table border="1">
        <h3>Transaksi</h3>
            <tr>
                <td>No Transaksi</td>
                <td>ID Pengunjung</td>
                <td>ID Karyawan</td>
                <td>Jumlah Kamar</td>
                <td>Tanggal Masuk</td>
                <td>Tanggal Keluar</td>
                <td>Lama Menginap</td>
                <td>Total Harga</td>
            </tr>

            @foreach ($transaksi as $transaksi)
            <tr>
                <td>{{$transaksi->no_transaksi}}</td>
                <td>{{$transaksi->ID_pengunjung}}</td>
                <td>{{$transaksi->ID_karyawan}}</td>
                <td>{{$transaksi->jmlh_kamar}}</td>
                <td>{{$transaksi->tgl_masuk}}</td>
                <td>{{$transaksi->tgl_keluar}}</td>
                <td>{{$transaksi->lama_nginap}}</td>
                <td>{{$transaksi->total_harga}}</td>
            </tr>
            @endforeach
        </table>

        <table border="1">
        <h3>Detail Transaksi</h3>
            <tr>
                <td>ID Detail Transaksi</td>
                <td>No Transaksi</td>
                <td>No Kamar</td>
            </tr>

            @foreach ($detail_transaksi as $detailtransaksi)
            <tr>
                <td>{{$detailtransaksi->id_dtl_transaksi}}</td>
                <td>{{$detailtransaksi->NO_transaksi}}</td>
                <td>{{$detailtransaksi->NO_kamar}}</td>
            </tr>
            @endforeach
        </table>

    </fieldset>
</body>
</html>