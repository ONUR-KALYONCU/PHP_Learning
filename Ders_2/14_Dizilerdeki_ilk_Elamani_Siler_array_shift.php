<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Dizilerdeki İlk Elamanı Silme</title>
</head>

<body>

<?php

// array_shift =  dizinin ilk elemanını silme işlemi yapar

$ad = array("A", "B", "C", "D", "E", "webcebir.com");

$ilkad = array_shift($ad);

echo "<pre>";

print_r($ad);

echo "</pre>";

echo "çıkarılan eleman...:".$ilkad;

?>

</body>

</html>