<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Dizileri Foreach İle Kullanma</title>
</head>

<body>

<?php

// Foreach : döngü kullanmadan dizi elemanlarına ulaşılmasını sağlar.


$dizi = array(1,2,3,4,5); // Dizi elamanları

foreach ($dizi as $deger) {
	echo "$deger <br>";
}

?>  

</body>

</html>