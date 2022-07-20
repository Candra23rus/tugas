<?php
include "koneksi.php";
$nama=$_POST['nama'];
$kelas=$_POST['kelas'];
$ket=$_POST['ket'];

$query=mysqli_query($koneksi,"insert into data values ('','$nama','$kelas','$ket')") or die(mysqli_error($koneksi));
if($query){
	?>
	<script>
	alert("berhasil menambahkan data")
	</script>
	<?php
	header("location:index.php");
}?>