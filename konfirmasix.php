<?php
include('inc/inc.php');
$session=$_GET['session'];
$pak=$_GET['pak'];
$faktur=$_GET['faktur'];
$v=mysqli_query($conn,"delete from cartv where session='$session'");
$vv=mysqli_query($conn,"update cart set faktur='$faktur' where id='$pak'");

if($vv)
	{header('location: konfirmasi.php?faktur='.$faktur.'');}
else
	{header('location: konfirmasi.php?faktur='.$faktur.'');}

?>