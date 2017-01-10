<?php

session_start();

$code=rand(1000,9999);
$_SESSION["code"]=$code;

$im = imagecreatetruecolor(50, 24);
$bg = imagecolorallocate($im, 221, 221, 221); // bg color
$fg = imagecolorallocate($im, 50, 50, 50);//text color

imagefill($im, 0, 0, $bg);
imagestring($im, 5, 5, 5,  $code, $fg);

header("Cache-Control: no-cache, must-revalidate");
header('Content-type: image/png');

imagepng($im);
imagedestroy($im);

?>