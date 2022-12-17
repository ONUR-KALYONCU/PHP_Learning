<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>number_format()</title>
</head>

<body>

<?php
// Sayıyı binlik bölümlere ayırır.

$num = 2000.0;
$formattedNum = number_format($num)."<br>";
echo $formattedNum;
$formattedNum = number_format($num, 2);
echo $formattedNum;

// 1.234,56
?>

</body>

</html>