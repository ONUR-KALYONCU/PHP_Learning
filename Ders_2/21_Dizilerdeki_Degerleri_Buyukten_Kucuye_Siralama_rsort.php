<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Dizileri  Büyükten Küçüğe Sıralama</title>
</head>

<body>

<?php

// rsort  Büyükten Küçüye Sıralama yapar

$fruits = array("lemon", "orange", "banana", "apple");

rsort($fruits);
foreach ($fruits as $key => $val) {
    echo "fruits[" . $key . "] = " . $val . "<br>";
}

?>


</body>

</html>


