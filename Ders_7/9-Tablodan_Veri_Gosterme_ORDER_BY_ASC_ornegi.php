<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Veritabanı Tablodan Veri Gösterme ORDER BY Örnekleri</title>
</head>

<body>
<?php 

echo "SELECT * FROM `mezun_ogrenci` WHERE ogrenci_adi LIKE '%A%' ORDER BY `ogrenci_soyadi` ASC";  // ÖĞRENCİ ADININ İÇİNDE (A) OLANLARI A-DAN Z-YE SIRALAMASINI GÖSTERİR

echo "<br><br>";

?>

</body>

</html>
