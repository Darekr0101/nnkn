<?php
	session_start();
 
	$so1 = rand(1, 9);
    $so2 = rand(1,9);
    $caculato = ["*","-","+","/"];
    $randC = $caculato[rand(0,3)];
    $result = $randC=="*"?($so1*$so2):($randC=="-"?($so1-$so2):($randC=="+"?$so1+$so2:$so1/$so2));
    $randomCaptcha = $so1." ".$randC." ".$so2." = ?";
    $_SESSION['captcha'] = $result;
	$captcha = imagecreatefromjpeg("image/captcha.jpg");
	$color = imagecolorallocate($captcha, 0, 0, 0);
	$font = 'font/tahoma.ttf'; 
	imagettftext($captcha, 40, 0, 50, 60, $color, $font, $randomCaptcha );
	imagepng($captcha);
	imagedestroy($captcha);
?>