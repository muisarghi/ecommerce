<?php
session_start();
$fcount = mt_rand(5, 7);
$text = substr(md5(microtime()),mt_rand(0,26),$fcount);
$_SESSION["Captcha"] = $text;
$height = 35; 
$width = 100; 
$tt_image = imagecreate($width, $height);
$black = imagecolorallocate($tt_image, 0, 0, 0);
//$black = imagecolorallocate($tt_image, 0, 0, 0);
$white = imagecolorallocate($tt_image, 255, 255, 255); 
$blue = imagecolorallocate($tt_image, 0, 0, 255);
$lcolor = ImageColorAllocate($tt_image, mt_rand(110, 210), mt_rand(120, 210), mt_rand(130, 210));
$vertices = array(
mt_rand(0, 4),0,
mt_rand(8, 13),60,
mt_rand(21, 26),0,
mt_rand(32, 37),60,
mt_rand(44, 56),0,
mt_rand(64, 69),60,
mt_rand(76, 81),0,
mt_rand(84, 86),60,
mt_rand(89, 94),0,
mt_rand(98, 100),60,
mt_rand(1, 12),0,
mt_rand(16, 25),60,
mt_rand(34, 39),0,
mt_rand(44, 49),60,
mt_rand(58, 63),0,
mt_rand(67, 72),60,
mt_rand(79, 86),0,
mt_rand(92, 100),60
);
imagepolygon($tt_image, $vertices, 12, $lcolor);
$ttfont = "Monaco.ttf";
$font_size = mt_rand(20, 21);
$x = mt_rand(2, 6);
$y = mt_rand(22,28);
$fangle = mt_rand(-3,3);
$fcolor = ImageColorAllocate($tt_image, mt_rand(200, 255), mt_rand(240, 250), mt_rand(210, 255));
//imagettftext($tt_image, $font_size, $fangle, $x, $y, $fcolor, $ttfont, $text);
imagestring($tt_image, $font_size, 5, 8, $text, $white);
/* Avoid Caching */
header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header( "Content-type: image/png" );
imagepng($tt_image); 
imagedestroy($tt_image );

?>