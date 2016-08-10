<?php //
header('Content-Type: image/png');
$frame_name = '../frames_orignal/95.png';
$canvas = @imagecreatefrompng($frame_name);

$filename1 = '../frames_temp/2.jpg';
//$filename2 = '../frames_temp/2.jpg';


$icon1 = imagecreatefromjpeg($filename1);
//$icon2 = imagecreatefromjpeg($filename2);

imagecopy($canvas, $icon1, 1475, 230, 0, 0, 1190, 1480);
//imagecopy($canvas, $icon2, 2005, 230, 0, 0, 895, 1190);

imagepng($canvas);
?>