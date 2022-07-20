<?php
include "koneksi.php";
include "head.php";
?>
<html>
<head><title>tugas kerja</title>
</head>
<body>

<nav class="container">
<div class="card text-center">
<div class="card-header">
Data siswa
</div>
  <div class="card-body">
<a href="tambah.php" class="btn btn-primary">Tambah Data</a>
<table class="table">
<tr>
<thead>
<th>No</th>
<th>Nama</th>
<th>Kelas</th>
<th>Keterangan</th>
<th>Action</th>
</thead>
<tbody>
<?php
$data=mysqli_query($koneksi,"select * from data") or die(mysqli_error($koneksi));
$no=1;
foreach($data as $d){
?>
<tr>
<td><?= $no++;?></td>
<td><?= $d['nama'];?></td>
<td><?= $d['kelas'];?></td>
<td><?= $d['ket'];?></td>
<td><a href="editdata.php?id=<?= $d['id'];?>" class="btn btn-success">edit </a> <a href="hapus.php?id=<?= $d['id'];?>" class="btn btn-danger">hapus </a>
<?php
}?>
</div>
</div>
</tbody>
</html>