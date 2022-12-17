<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>time() fonksiyonu</title>
</head>

<body>

<?php

$simdi=time();
$gelecek_hafta=$simdi + 7*24*60*60;
echo "Gelecek Hafta : ",$gelecek_hafta;

?>

</body>

</html>