<?php session_start(); 

   function newone($image)
  {
  $exif = exif_read_data($image);

if ($exif['Orientation'] != 0)
{
$source  = imagecreatefromjpeg($image);
$degrees = 0;
switch ($exif['Orientation'])
{
case 3:
  $degrees = 180;
  break;
  case 6:
  $degrees = 270;
  break;
  case 8:
  $degrees = 90;
  break;
  }
  
ini_set('memory_limit', '256m');
$rotate = imagerotate($source, $degrees, 0);
ini_set('memory_limit', '256m');
imagejpeg($rotate, $image);
 imagedestroy($source);
 imagedestroy($rotate); 
}

}

?>
