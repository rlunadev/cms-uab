<?php
$file = $_FILES["file"]["name"];
$destino="./public/assets/images/subidas/";

if(!is_dir($destino))
	mkdir($destino, 0777);

if($file && move_uploaded_file($_FILES["file"]["tmp_name"], $destino.$file))
{
	echo $file;
}