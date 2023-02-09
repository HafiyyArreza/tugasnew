<?php
include("koneksi.php");

$id_peminjam=$_GET['id_peminjam'];

$sql="DELETE FROM tb_mobil where id_mobil='$id_peminjam'";
$query=mysqli_query($db,$sql);

$sql="DELETE FROM tb_peminjam where id_peminjam='$id_peminjam'";
$query=mysqli_query($db,$sql);

if($query){
    header("Location:tampilcuy.php?status=sukses");
}else{
    die("akses dilarang");
}

?>
