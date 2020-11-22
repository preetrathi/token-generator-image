<?php
//define file type
header('content-type: image/jpeg');
//collect source and data
echo $user = $_POST['username'];
$source = "images/textimage.jpg";


//set image background
$image = imagecreatefromjpeg($source);
imagejpeg($image);
?>