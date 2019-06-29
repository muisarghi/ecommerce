<?php
ob_start();
include('function.php');

$load=$_GET['load'];
$datenow=date('Y-m-d');

	switch($load)
	{
	case 'home':
	go::home($option);
	break;
	case 'content':
	go::content($option);
	break;
	case 'newcontent':
	go::newcontent($option);
	break;
	case 'contentin':
	go::contentin($option);
	break;
	case 'dcontent':
	go::dcontent($option);
	break;
	case 'contentup':
	go::contentup($option);
	break;

	case 'article':
	go::article($option);
	break;
	case 'delcontent':
	go::delcontent($option);
	break;
	case 'news':
	go::news($option);
	break;

	case 'merk':
	go::merk($option);
	break;
	case 'merkhps':
	go::merkhps($option);
	break;
	case 'merkin':
	go::merkin($option);
	break;
	case 'merkdet':
	go::merkdet($option);
	break;
	case 'merkdetail':
	go::merkdetail($option);
	break;
	case 'merkup':
	go::merkup($option);
	break;

	case 'slider':
	go::slider($option);
	break;
	case 'sliderup':
	go::sliderup($option);
	break;

	case 'advs':
	go::advs($option);
	break;
	case 'advsup':
	go::advsup($option);
	break;
	case 'advstop':
	go::advstop($option);
	break;
	case 'advsbot':
	go::advsbot($option);
	break;
	case 'advsmain':
	go::advsmain($option);
	break;
	case 'inputslider':
	go::inputslider($option);
	break;
	case 'upslider':
	go::upslider($option);
	break;
	case 'delslider':
	go::delslider($option);
	break;
/*
$file ='../img/testi/'.$a['idtesti'].'.jpg';
		if (is_file($file))
*/
	case 'contact':
	go::contact($option);
	break;
	case 'contactup':
	go::contactup($option);
	break;
	case 'dcontact':
	go::dcontact($option);
	break;

	case 'testi':
	go::testi($option);
	break;
	case 'testiup':
	go::testiup($option);
	break;
	case 'dtesti':
	go::dtesti($option);
	break;

	case 'shop':
	go::shop($option);
	break;
	case 'delshop':
	go::delshop($option);
	break;
	case 'dshop':
	go::dshop($option);
	break;

	case 'bkirimup':
	go::bkirimup($option);
	break;

	case 'statusup':
	go::statusup($option);
	break;

	case 'confirm':
	go::confirm($option);
	break;
	case 'delconfirm':
	go::delconfirm($option);
	break;

	case 'account':
	go::account($option);
	break;
	case 'saccount':
	go::saccount($option);
	break;

	
	case 'del':
	go::del($option);
	break;
	case 'dele':
	go::dele($option);
	break;

	default:
	go::home($option);
	break;
	}	

?>