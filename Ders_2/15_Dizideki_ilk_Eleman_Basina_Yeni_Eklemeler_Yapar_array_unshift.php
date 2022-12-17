<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Dizilerin Başına Yeni Eklemeler Yapma</title>
</head>

<body>

<?php

// array_unshift = dizinin ilk eleman başına ekleme işlemi yapar

$a=array("a"=>"Kırmızı","b"=>"Yeşil");
	array_unshift($a,"Mavi");
		print_r($a);

?>

</body>

</html>