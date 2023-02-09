<?php
include("koneksi.php");
if(!isset($_GET['id_peminjam'])){
    header("location:tampilcuy.php");
}

$id_peminjam=$_GET['id_peminjam'];
$sql="SELECT * FROM tb_peminjam INNER JOIN tb_mobil ON tb_peminjam.id_mobil= tb_mobil.id_mobil 
WHERE tb_peminjam.id_peminjam='$id_peminjam'";
$query=mysqli_query($db,$sql);
$tb_peminjam=mysqli_fetch_assoc($query);
?>

<html>
    <head>
    <link rel="stylesheet" href="data_edit.css">
    <link rel="icon" type="icon/x-icon" href="wallpaper3.jpg">
</head>
<body>
    <center>
        <div class="cilok">
    <h1>بسم الله الرحمن الرحيم</h1>
    </div>
    <h4>Edit</h4>
    <table border="1">
       <form action="proses_edit.php" method="POST">
       <input type="hidden" name="id_peminjam" value="<?php echo $tb_peminjam['id_peminjam']?>" />
       <tr>
        <td><label for="nama_peminjam"> Nama Peminjam : </label></td>
        <td><input type="text" name="nama_peminjam" value="<?php echo $tb_peminjam['nama_peminjam']?>" /></td>
</tr>
    <tr>
        <td><label for="alamat"> Alamat : </label></td>
        <td><input type="text" name="alamat" value="<?php echo $tb_peminjam['alamat']?>" /></td>
</tr>
    <tr>
        <td><label for="umur"> Umur : </label></td>
        <td><input type="number" name="umur" value="<?php echo $tb_peminjam['umur']?>" /></td>
</tr>
    <tr>
        <td><label for="keperluan"> Keperluan : </label></td>
        <td><input type="text" name="keperluan" value="<?php echo $tb_peminjam['keperluan']?>" /></td>
</tr>
    <tr>
        <td><label for="jaminan"> Jaminan : </label>
        <td><input type="text" name="jaminan" value="<?php echo $tb_peminjam['jaminan']?>" /></td>
</tr>
    <tr>
        <td><label for="plat_nomor"> Plat Nomor : </label></td>
        <td><input type="text" name="plat_nomor" value="<?php echo $tb_peminjam['plat_nomor']?>" /></td>
</tr>
    <tr>
        <td><label for="merek"> Merek : </label></td>
        <td><input type="text" name="merek" value="<?php echo $tb_peminjam['merek']?>" /></td>
</tr>
    <tr>
        <td><label for="jenis_mobil"> Jenis Mobil : </label></td>
        <td><input type="text" name="jenis_mobil" value="<?php echo $tb_peminjam['jenis_mobil']?>" /></td>
</tr>
    <tr>
        <td><label for="tahun_mobil"> Tahun Mobil : </label></td>
        <td><input type="number" name="tahun_mobil" value="<?php echo $tb_peminjam['tahun_mobil']?>" /></td>
</tr>
    <tr>
        <td><label for="tanggal_pinjam"> Tanggal Pinjam : </label></td>
        <td><input type="date" name="tanggal_pinjam" value="<?php echo $tb_peminjam['tanggal_pinjam']?>" /></td>
</tr>
    <tr>
        <td><label for="tanggal_kembali"> Tanggal Kembali : </label></td>
        <td><input type="date" name="tanggal_kembali" value="<?php echo $tb_peminjam['tanggal_kembali']?>" /></td>
</tr>
</table><p>
<td><input type="submit" name="edit" value="edit"></td>

</center>

</form>
</body>
</html>