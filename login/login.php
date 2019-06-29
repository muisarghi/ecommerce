<?php
$user = $_POST['user'];
$password = $_POST['password'];

if (!isset($user) || !isset($password)) 
{
header( "Location: index.php?msg=Masukkan Username, Password Dengan Benar." );
}

elseif (empty($user) || empty($password)) 
{
header( "Location: index.php?msg=Masukkan Username, Password Dengan Benar." );
}


else
{

$user = $_POST['user'];
$password = $_POST['password'];

include ('../inc/inc.php');
	$pes2=MD5($password);
	$cari="SELECT *FROM useradmin where user='$user' and password='$pes2'";
	$hasil=mysqli_query($conn,$cari);
	if($hasil)
	while($data=mysqli_fetch_array($hasil))
	{
	$id=$data['id'];
	}

$a1=mysqli_query($conn,"select *from useradmin where user='$user' and password='$pes2'");
while($a=mysqli_fetch_array($a1))
	{
	$id=$a['id'];
	$ket=$a['ket'];
	}

//////////// USER LOG
$tglskr=date('Y-m-d');
$tglwkt=date('Y-m-d H:i');
$ipc=$_SERVER["REMOTE_ADDR"];

session_start();
	$_SESSION['id']=$id;
	$_SESSION['sesket']=$ket;
	$_SESSION['kcfinder'] = FALSE;
	if($ket=='admin')
		{$loc='../admin/index.php';}
	else
		{
		$loc='index.php';
		}
	header("Location: $loc");

/*
$cc=mysql_query("select *from user_log where id_employe='$idx' and tgllog='$tglskr'");
while($ccc=mysql_fetch_array($cc))
	{$id_log=$ccc[id_log];}

$c=mysql_result(mysql_query("select count(*)from user_log where id_employe='$idx' and tgllog='$tglskr'"),0);

if($c==0)
	{
	//insert DB
	$d=mysql_query("insert into user_log values('', '$idx', '$tglskr', '$tglwkt', '','$ipc')");

	session_start();
	//session_register('idx');
	$_SESSION['idx']=$idx;
	if($unita=='Pinca')
		{$loc='../pnc/index.php';}
	elseif($unita=='Syst')
		{$loc='../syst/index.php';}
	elseif($unita=='Supervisor')
		{$loc='../sup/index.php';}
	elseif($unita=='Admin')
		{$loc='../mda/index.php';}
	elseif($unita=='Rutang')
		{$loc='../rt/index.php';}
	elseif($unita=='CPC')
		{$loc='../pc/index.php';}
	elseif($unita=='kanpus')
		{$loc='../pus/index.php';}
	else
		{$loc='index.php';}

	header("Location: $loc");
	}

else
	{
	//
	//check IP, 1, update
	//check IP, 0, out
	//$e=mysql_result(mysql_query("select *from user_log where id_employe='$idx' and tgllog='$tglskr' and ip='$ipc'"),0);
	//echo"$idx,$tglskr,$ipc";
	
	$e1=mysql_query("select *from user_log where id_employe='$idx' and tgllog='$tglskr'");
	while($e=mysql_fetch_array($e1))
		{
		$logout=$e[logout];
		$login=$e[login];
		$ip=$e[ip];
		}
	if($logout=='')
		{
		//echo"NULL";
	
		
		
		if($ip==$ipc)
			{
			session_start();
			//session_register('idx');
			$_SESSION['idx']=$idx;
			if($unita=='Pinca')
				{$loc='../pnc/index.php?tsk=index';}
			elseif($unita=='Syst')
				{$loc='../syst/index.php?tsk=index';}
			elseif($unita=='Supervisor')
				{$loc='../sup/index.php?tsk=index';}
			elseif($unita=='Admin')
				{$loc='../mda/index.php?tsk=index';}
			elseif($unita=='Rutang')
				{$loc='../rt/index.php?tsk=index';}
			elseif($unita=='CPC')
				{$loc='../pc/index.php?tsk=index';}
			elseif($unita=='kanpus')
				{$loc='../pus/index.php?tsk=index';}
			else
				{$loc='index.php';}

			header("Location: $loc");
			}
		else
			{
			header("Location: index.php?msg=Masukkan Code, Password Dengan Benar. Atau Code dan Password Anda Telah Digunakan");
			}
		

		
		}
		else
		{
			//echo"VALUE $login, $logout, $idx";
			
			$f=mysql_query("update user_log set login='$tglwkt', logout='', ip='$ipc' where id_log='$id_log'");
			session_start();
			//session_register('idx');
			$_SESSION['idx']=$idx;
			if($unita=='Pinca')
				{$loc='../pnc/index.php?tsk=index';}
			elseif($unita=='Syst')
				{$loc='../syst/index.php?tsk=index';}
			elseif($unita=='Supervisor')
				{$loc='../sup/index.php?tsk=index';}
			elseif($unita=='Admin')
				{$loc='../mda/index.php?tsk=index';}
			elseif($unita=='Rutang')
				{$loc='../rt/index.php?tsk=index';}
			elseif($unita=='CPC')
				{$loc='../pc/index.php?tsk=index';}
			elseif($unita=='kanpus')
				{$loc='../pus/index.php?tsk=index';}
			else
				{$loc='index.php';}

			header("Location: $loc");
			
		}



		//logout=='' -> IP harus = IPC
		//
		//logout!='' -> tdk check IP

		//ip=ipc -->in

	/*if($e==1)
		{
	
		$f=mysql_query("update user_log set login='$tglwkt' where id_log='$id_log'");
		//echo"$tglwkt, $id_log";
		
		session_start();
		session_register('idx');
		if($unita=='Pinca')
			{$loc='../pnc/index.php';}
		elseif($unita=='Supervisor')
			{$loc='../sup/index.php';}
		elseif($unita=='Admin')
			{$loc='../mda/index.php';}
		elseif($unita=='CPC')
			{$loc='../pc/index.php';}
		else
			{$loc='index.php';}

		header("Location: $loc");
		
		}
	else
		{
		//
		header("Location: index.php?msg=Masukkan Code, Password dan Branch Dengan Benar. Atau Code dan Password Anda Telah Digunakan");
			
		}
	*/


	//}
}
	
?>