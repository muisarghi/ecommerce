<?php
ob_start();
include('inc/inc.php');
$id=$_GET['id'];
$s=$_GET['s'];

$a=mysqli_query($conn,"delete from cartv where id='$id'");
if($a)
	{header("location: troli.php?s=".$s."");}
else
	{header("location: troli.php?s=".$s."");}
?>