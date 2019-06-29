<?php

include('inc/inc.php');

$kode=$_POST['kode'];
$harga=$_POST['harga'];
$jml=$_POST['jml'];
$session=$_POST['session'];
$tgl=date('Y-m-d H:i');
//$total=$jml*$harga;

$c=count($kode);
for($i=0;$i<$c;$i++)
	{
	$total[$i]=$jml[$i]*$harga[$i];
	echo"$kode[$i], $harga[$i], $jml[$i], $total[$i], $session<br>";
	$a=mysqli_query($conn,"update cartv set jml='$jml[$i]', total='$total[$i]' where kode='$kode[$i]'");
	}
/*
$a=mysqli_query("insert into cartv values ('', '$tgl', '$kode', '$harga', '$jml', '$total', '$session')");
*/
if($a)
	{header('location: checkout.php?s='.$session.'');}
else
	{header('location: checkout.php?s='.$session.'');}


?>