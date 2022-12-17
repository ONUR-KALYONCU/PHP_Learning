<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Php Yardımıyla mail gönderme</title>
</head>

<body>

<?php
// Bir mailin php ile yollanması aşağıdaki gibidir.

	$adres = "ismailkeklik44@gmail.com";
	$konu = "Mail konusu";
	$mesaj = "PHP Mail() Fonksiyonu";
	mail("$adres","$konu","$mesaj");
	echo "mail gönderildi";

?>

</body>

</html>