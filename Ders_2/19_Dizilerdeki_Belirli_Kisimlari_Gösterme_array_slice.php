<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Dizilerin Belirli Kısımları Gösterme </title>
</head>

<body>

<?php

// array_slice  dizinin belirli kısmını göstermeye yarar

$a=array("kırmızı","yeşil","mavi","sarı","pembe");
	
	print_r(array_slice($a,2)); 

?>
</body>

</html>