<!DOCTYPE html>
<html>
<head>
 <title>TUGAS LATIHAN</title>
 <link rel="stylesheet" href="style.css">
 <link rel="icon" type="icon/x-icon" href="wallpaper1.jpg">
</head>
<body>
  
  <center><div class="bakso">
    <h1>بسم الله الرحمن الرحيم</h1>
</div>
 <h4><a href=tambahcuy.php>TAMBAH</a></h4>
 <table border="1">
  <tr>
   <td>NAMA PEMINJAM</td>
   <td>ALAMAT</td>
   <td>UMUR</td>
   <td>KEPERLUAN</td>
   <td>JAMINAN</td>
   <td>PLAT NOMOR</td>
   <td>MEREK</td>
   <td>JENIS MOBIL</td>
   <td>TAHUN MOBIL</td>
   <td>TANGGAL PINJAM</td>
   <td>TANGGAL KEMBALI</td>
   <td>AKSI</td>
  </tr>
  
  <?php
include("koneksi.php");
$sql="SELECT * FROM tb_peminjam INNER JOIN tb_mobil ON tb_peminjam.id_mobil= tb_mobil.id_mobil";
$query= mysqli_query($db, $sql);

while($row=mysqli_fetch_array($query)){
    echo"<tr>";
    echo"<td>".$row['nama_peminjam']."</td>";
    echo"<td>".$row['alamat']."</td.>";
    echo"<td>".$row['umur']."</td>";
    echo"<td>".$row['keperluan']."</td>";
    echo"<td>".$row['jaminan']."</td>";
    echo"<td>".$row['plat_nomor']."</td>";
    echo"<td>".$row['merek']."</td>";
    echo"<td>".$row['jenis_mobil']."</td.>";
    echo"<td>".$row['tahun_mobil']."</td>";
    echo"<td>".$row['tanggal_pinjam']."</td>";
    echo"<td>".$row['tanggal_kembali']."</td>";
    echo"<td>";
    echo"<a href='editcuy.php?id_peminjam=".$row['id_peminjam']."'>Edit</a>|";
    echo"<a href='hapuscuy.php?id_peminjam=".$row['id_peminjam']."'>Hapus</a>|";
    echo"</td>";
    echo"</tr>";

    
}
?>
</center>
</table>
</body>
</html>