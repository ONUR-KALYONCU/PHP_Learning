<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>explode() fonksiyonu</title>
</head>

<body>

<?php
// Bir dizgeyi bir ayraca göre bölüp bir dizi haline getirir.

$str = "Selam Dünya. Güzel bir gün.";
$parcala = (explode(" ",$str));
//print_r ($parcala);

echo $parcala[0];

?>

</body>

</html>