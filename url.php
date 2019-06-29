<?php
$actual_link = (isset($_SERVER['HTTPS']) ? 'https' : 'http').'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	$c=explode('/',$actual_link);
	$d=count($c);
	$e=$d-1;
	$f=str_replace($c[$e],'',$actual_link);
?>