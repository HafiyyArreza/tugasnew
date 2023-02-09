<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="data_tambah.css">
 <link rel="icon" type="icon/x-icon" href="wallpaper2.jpg">
</head>
<body>
    <center><div class="batagor">
    <h1>بسم الله الرحمن الرحيم</h1>
</div>
</body>
</html>
<form action="proses_tambah.php" method="POST">
<table border="1">
        <tr>
                <td><label for="nama_peminjam">Nama Peminjam:</label></td>
                <td><input type="text" name="nama_peminjam" /></td>
</tr>
            <tr>
                <td><label for="alamat">Alamat:</label></td>
                <td><input type="text" name="alamat" /></td>
</tr>
            <tr>
                <td><label for="umur">Umur : </label></td>
                <td><input type="number" name="umur" /></td>
</tr>
            <tr>
                <td><label for="keperluan">Keperluan : </label></td>
                <td><input type="text" name="keperluan" /></td>
</tr>
            <tr>
                <td><label for="jaminan">Jaminan : </label></td>
                <td><input type="text" name="jaminan" /></td>
</tr>
            <tr>
                <td><label for="plat_nomor">Plat Nomor : </label></td>
                <td><input type="text" name="plat_nomor" /></td>
</tr>
            <tr>
                <td><label for="merek">Merek : </label></td>
                <td><input type="text" name="merek" /></td>
</tr>
            <tr>
                <td><label for="jenis_mobil">Jenis Mobil : </label></td>
                <td><input type="text" name="jenis_mobil" /></td>
</tr>
            <tr>
                <td><label for="tahun_mobil">Tahun Mobil : </label></td>
                <td><input type="number" name="tahun_mobil" /></td>
</tr>
            <tr>
                <td><label for="tanggal_pinjam">Tanggal Pinjam : </label></td>
                <td><input type="date" name="tanggal_pinjam" /></td>
</tr>
            <tr>
                <td><label for="tanggal_kembali">Tanggal Kembali : </label></td>
                <td><input type="date" name="tanggal_kembali" /></td>
</tr>
</table><p>
<td><input type="submit" name="submit" value="submit"></td>
</form>
</body>
</html>
</center>