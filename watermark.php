<?php
$stamp = imagecreatefrompng('watermar.png');
$image = imagecreatefromjpeg('priroda.jpg');

$marge_right = 10;
$marge_bottom = 10;

$stamp_x = imagesx($stamp);
$stamp_y = imagesy($stamp);

imagecopy($image, $stamp, imagesx($image) - $stamp_x - $marge_right, imagesy($image) - $stamp_y - $marge_bottom, 0, 0, imagesx($stamp), imagesy($stamp));
header('Content-type: image/png');
imagepng($image);
imagedestroy($image);