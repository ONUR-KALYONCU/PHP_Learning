<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Döngülerde Şart Switch Örnek 2</title>
</head>

<body>

<?php

$i="portakal"; //elma ve muz olarak de deneyiniz.

switch ($i) {
case 0:
case 1:
case 2:
    echo "i degeri 3 den kucuk ama negatif degil";
    break;
case 3:
    echo "i degeri 3";
}

?>

</body>

</html>