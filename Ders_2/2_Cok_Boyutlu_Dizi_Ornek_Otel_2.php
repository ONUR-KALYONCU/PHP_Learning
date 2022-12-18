<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Çok Boyutlu Dizi Örneği OTEL -2</title>
</head>

<body>
<?php

// Otel Odası ve İçindekileri Barındıran Çoklu Diziler Örneği-2

$otel=array(

 "kat1"=>array("oda1"=>"Ali","oda2"=>"Ahmet","oda3"=>"Ömer"),
 "kat2"=>array("oda1"=>"Hasan","oda2"=>"Kenan","oda3"=>"Mert"),
 "kat3"=>array("oda1"=>"Ayşe","oda2"=>"Fatma","oda3"=>"Hatice"),
 
 "kat4"=>array(
 "oda1"=>"Hakan",
 "oda2"=>"Hüseyin",
 "oda3"=>"Merve"
 )
 
);

echo $otel["kat4"]["oda1"]; // ekrana Hakan yazar
?>

</body>

</html>


