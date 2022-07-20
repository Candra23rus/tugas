<?php
include "head.php";
?>
<html>
<head><title>tambah data</title>
</head>
<body>

<nav class="container">
<div class="card text-center">
<div class="card-header">
Form tambah data
</div>
  <div class="card-body">
<table>
<form name="data" method="post" action="tambahdata.php">
<tr><td>Nama</td><td><input type="text" name="nama"></td></tr>
<tr><td>Kelas</td><td><input type="text" name="kelas"></td></tr>
<tr><td>Keterangan</td><td><input type="text" name="ket"></td></tr>
<tr><td colspan="2"><input type="submit" value="Tambah" class="btn btn-success"> <a href="index.php" class="btn btn-warning"> Kembali</a></td></tr>
</table>
</body>
</html>