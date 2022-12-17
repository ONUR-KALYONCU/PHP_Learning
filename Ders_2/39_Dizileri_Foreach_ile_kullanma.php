<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Dizileri Foreach İle Kullanma</title>
</head>

<body>

<?php

// Bir array deki bütün değerleri herhangi bir değişkeni arttırmaya gerek duymadan görüntüler. 
// Foreach : döngü kullanmadan dizi elemanlarına ulaşılmasını sağlar.


  $dersler[] = "Matematik";
  $dersler[] = "Türkçe";
  $dersler[] = "Bilgisayar";

    foreach($dersler as $ders_adi) {
	echo "$ders_adi <br>";	
    }

?>  

</body>

</html>