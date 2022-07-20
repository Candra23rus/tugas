<?php
$host="localhost";
$user="root";
$pass="";
$db="db_tes";

$koneksi=mysqli_connect($host,$user,$pass,$db);

if(mysqli_connect_errno()){
?>
<script>
alert("Database Tidak ada")
</script>
<?php
}?>