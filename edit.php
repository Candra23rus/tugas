<?php
include "koneksi.php";

$id=$_POST['id'];
$nama=$_POST['nama'];
$kelas=$_POST['kelas'];
$ket=$_POST['ket'];

$query=mysqli_query($koneksi,"update data set id='$id',nama='$nama',kelas='$kelas',ket='$ket' where id='$id'") or die(mysqli_error($koneksi));

if($query){
	header("location:index.php");
}
?>