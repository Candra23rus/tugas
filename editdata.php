<?php
include "head.php";
?>
<html>
<head><title>tugas kerja</title>
</head>
<body>
<?php
include "koneksi.php";
$id=$_GET['id'];
$data=mysqli_query($koneksi,"select * from data where id='$id'") or die(mysqli_error($koneksi));
$d=mysqli_fetch_array($data);
?>
<nav class="container">
<div class="card text-center">
<div class="card-header">
Edit Data siswa
</div>
  <div class="card-body">
<table border=0>
<form name="update" method="post" action="edit.php">
<input type="text" value="<?= $d['id'];?>" name="id" hidden>
<tr><th>ID</th><td><input type="text" value="<?= $d['id'];?>" disabled></td></tr>
<tr><th>Nama</th><td><input type="text" value="<?= $d['nama'];?>" name="nama"></td></tr>
<tr><th>Kelas</th><td><input type="text" value="<?= $d['kelas'];?>" name="kelas"></td></tr>
<tr><th>Keterangan</th><td><input type="text" value="<?= $d['ket'];?>" name="ket"></td></tr>
<tr><td colspan="2"><input type="submit" value="update" class="btn btn-success"> <a href="index.php" class="btn btn-warning"> Kembali</a></td></tr>
</html>