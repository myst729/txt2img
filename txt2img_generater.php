<?php

$font = "droid.ttf";
$pid = $_POST['txt2img_pid'];
$content = $_POST['txt2img_content'];
$input = str_replace("\r", "", stripcslashes($content)) . "\n" . str_repeat('-', 65) . "\n" . "山寨长微博插件 https://github.com/myst729/txt2img" . "\n \n \n";
$title = explode("\n\n", $input);
$ary = imagettfbbox (12, 0, $font, $input);
$width = abs($ary[2] - $ary[0]) + 40;
$height = abs($ary[1] - $ary[7]) + 40;
$img = @imagecreate($width, $height);
$bgcolor = imagecolorallocate($img, '248', '248', '248');
$bdcolor = imagecolorallocate($img, '230', '230', '230');
$color = imagecolorallocate($img, '0', '0', '0');
imagettftext($img, 12, 0, 20, 40, $color, $font, $input);
imagettftext($img, 12, 0, 21, 40, $color, $font, $title[0]);
imagerectangle($img, 0, 0, imagesx($img) - 1, imagesy($img) - 1, $bdcolor);

if(defined('SAE_TMP_PATH')) {
  //SAE is not able to write local file.
  $file = "p-" . $pid . ".png";
  $s = new SaeStorage();
  ob_start();
  imagepng($img);
  $imgstr = ob_get_contents();
  $s->write('upload',$file,$imgstr);
  ob_end_clean(); 
  imagedestroy($img);
  echo $s->getUrl( 'upload' , $file );
} else {
  $file = "img/p-" . $pid . ".png";
  imagepng($img, $file);
  imagedestroy($img);
  echo 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']) . '/' . $file;
}

?>