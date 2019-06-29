<?php
@ini_set('display_errors', 'off');
session_start();
ob_start();

session_unset();
session_destroy();
header('Location:../login/index.php?msg=Anda Telah Melakukan Logout');

?>

