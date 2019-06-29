<?php
include('inc/inc.php');
$kode=$_POST['kode'];
$harga=$_POST['harga'];
$jml=$_POST['jml'];
$session=$_POST['session'];
$tgl=date('Y-m-d H:i');
$total=$jml*$harga;
$a=mysqli_query($conn,"insert into cartv values ('', '$tgl', '$kode', '$harga', '$jml', '$total', '$session')");

if($a)
	{header('location: troli.php?s='.$session.'');}
else
	{header('location: troli.php?s=failed');}
?>