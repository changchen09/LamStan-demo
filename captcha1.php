<?php
session_start();
$string="";
for($i=0;$i<5;$i++)
{	
  $string.=chr(rand(97,122));
  }


	$_SESSION['random_code']=$string;
	$dir='fonts/';
	$image=imagecreatetruecolor(170,60);
	$black=imagecolorallocate($image,0,0,0);
	$color=imagecolorallocate($image,0,0,255);
	$white=imagecolorallocate($image,255,255,255);
	imagefilledrectangle($image,0,0,399,99,$white);
	imagettftext($image,30,5,30,40,$color,$dir."COLONNA.TTF",$_SESSION['random_code']);
	
	header('content-type:image/png');
	imagepng($image);

?>