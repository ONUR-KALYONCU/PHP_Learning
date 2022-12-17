<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Çok Boyutlu Dizi Örneği OTEL</title>
</head>

<body>
<?php

// Otel Odası ve İçindekileri Barındıran Çoklu Diziler Örneği-1

$otel["kat1"]["oda1"]="Ali";
$otel["kat1"]["oda2"]="Ahmet";
$otel["kat1"]["oda2"]="Ömer";

$otel["kat2"]["oda1"]="Hasan";
$otel["kat2"]["oda2"]="Kenan";
$otel["kat2"]["oda3"]="Mert";

$otel["kat3"]["oda1"]="Ayşe";
$otel["kat3"]["oda2"]="Fatma";
$otel["kat3"]["oda3"]="Hatice";

$otel["kat4"]["oda1"]="Mehmet";
$otel["kat4"]["oda2"]="Hüseyin";
$otel["kat4"]["oda3"]="Hakan";


echo $otel["kat4"]["oda1"]; // ekrana Mehmet yazar
?>

</body>

</html>


