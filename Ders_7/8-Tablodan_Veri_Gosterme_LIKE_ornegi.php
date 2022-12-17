<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Veritaban Tablodan Veri Gösterme LIKE Örnekleri</title>
</head>

<body>
<?php 

echo "SELECT * FROM `mezun_ogrenci` WHERE ogrenci_adi LIKE '%A%'";  // ÖĞRENCİ ADININ İÇİNDE (A) OLANLARI GÖSTERİR

echo "<br><br>";

echo "SELECT * FROM `mezun_ogrenci` WHERE ogrenci_adi LIKE 'A%'";  // ÖĞRENCİ ADININ BAŞ HARFLERİN (A) OLANLARI GÖSTERİR

echo "<br><br>";

echo "SELECT * FROM `mezun_ogrenci` WHERE ogrenci_adi LIKE '%A'";  // ÖĞRENCİ ADININ SON HARFLERİN (A) OLANLARI GÖSTERİR

echo "<br><br>";

echo "SELECT * FROM `mezun_ogrenci` WHERE ogrenci_adi LIKE '_S%'";  // ÖĞRENCİ ADININ İKİNCİ HARFLERİN (S) OLANLARI GÖSTERİR

echo "<br><br>";

echo "SELECT * FROM `mezun_ogrenci` WHERE ogrenci_adi LIKE 'a__%'";  // ÖĞRENCİ ADININ İLK HARFİ (A) İLE BAŞLAYAN VE ENAZ 3 KARAKTERLİ OLANLARI GÖSTERİR

echo "<br><br>";

echo "SELECT * FROM `mezun_ogrenci` WHERE ogrenci_adi LIKE 'İ%L'";  // ÖĞRENCİ ADININ İLK HARFİ (İ) İLE BAŞLAYAN VE (L) İLE BİRENLERİ GÖSTERİR

echo "<br><br>";

echo "SELECT * FROM `mezun_ogrenci` WHERE ogrenci_adi NOT LIKE 'a%'";   // ÖĞRENCİ ADINDA (A) İLE BAŞLAMAYANLARI GÖSTERİR

?>

</body>

</html>
