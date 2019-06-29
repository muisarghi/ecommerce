<?php
ob_start();
//require '../inc/inc.php';
include('function.php');

$load=$_GET['load'];
$datenow=date('Y-m-d');

	switch($load)
	{
	case 'aboutus':
	go::aboutus($option);
	break;
	case 'faqs':
	go::faqs($option);
	break;
	case 'howtoshop':
	go::howtoshop($option);
	break;
	case 'lokasi':
	go::lokasi($option);
	break;
	case 'accountbank':
	go::accountbank($option);
	break;
	case 'confirm':
	go::confirm($option);
	break;
	case 'confirmp':
	go::confirmp($option);
	break;
	case 'confirma':
	go::confirma($option);
	break;

	case 'contactus':
	go::contactus($option);
	break;
	case 'contactusp':
	go::contactusp($option);
	break;
	case 'contactusa':
	go::contactusa($option);
	break;

	case 'testi':
	go::testi($option);
	break;
	case 'testia':
	go::testia($option);
	break;
	case 'testip':
	go::testip($option);
	break;
	
	case 'signup':
	go::signup($option);
	break;
	case 'signupa':
	go::signupa($option);
	break;
	case 'login':
	go::login($option);
	break;
	case 'akun':
	go::akun($option);
	break;
	case 'dakun':
	go::dakun($option);
	break;
	case 'account':
	go::account($option);
	break;
	case 'saccount':
	go::saccount($option);
	break;
	case 'spass':
	go::spass($option);
	break;
	case 'article':
	go::article($option);
	break;
	case 'news':
	go::news($option);
	break;
	case 'denews':
	go::denews($option);
	break;
	case 'virtual':
	go::virtualtour($option);
	break;

	default:
	go::aboutus($option);
	break;
	}	

?>