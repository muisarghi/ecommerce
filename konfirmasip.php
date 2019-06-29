<?php
require 'inc/inc.php';
//include('inc/inc.php');
$nama=$_POST['nama'];
$email=$_POST['email'];
$tgllhr=$_POST['tgllhr'];
$nohp=$_POST['nohp'];
$alamat=$_POST['alamat'];
$kota=$_POST['kota'];
$session=$_POST['session'];
$date=date('Y-m-d');
$date2=date('Y-m-d h:i');
$faktur=$_POST['faktur'];

$kode=$_POST['kode'];
$harga=$_POST['harga'];
$jml=$_POST['jml'];
$msessioncus=$_POST['msessioncus'];
@ini_set('display_errors', 'on');
if($msessioncus>0)
	{
	$z=mysqli_query($conn,"update customer set nama='$nama', email='$email', nohp='$nohp', alamat='$alamat', kota='$kota', tgllhr='$tgllhr' where idcus='$msessioncus'");
	$zi=$msessioncus;
	}
else
	{
	$z=mysqli_query($conn,"insert into customer values ('', '$nama', '$email', '$nohp', '$alamat', '$kota', '$tgllhr', 'n')");
	$zi=mysqli_insert_id($conn);
	}

$y=mysqli_query($conn,"insert into cart values ('', '$zi', '0', '$date', '0', '0', 'Checkout*$date2')");
$pak=mysqli_insert_id($conn);
$date=date('YmdHi');
$faktur="".$date."/".$pak."";

$cu=count($kode);
for($i=0;$i<$cu;$i++)
	{
	$total[$i]=$jml[$i]*$harga[$i];
	//echo"$kode[$i], $harga[$i], $jml[$i], $total[$i], $session<br>";
	$x=mysqli_query($conn,"insert into cartdetail values ('', '$faktur', '$kode[$i]', '$harga[$i]', '$jml[$i]', '$total[$i]')");
	}

//$v=mysqli_query("delete from cartv where session='$session'");
//$vv=mysqli_query("update cart set faktur='$faktur' where id='$pak'");

if($y)
	{header('location: konfirmasix.php?faktur='.$faktur.'&pak='.$pak.'&session='.$session.'');}
else
	{header('location: konfirmasix.php?faktur='.$faktur.'&pak='.$pak.'&session='.$session.'');}
	
?>