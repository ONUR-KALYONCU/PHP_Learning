<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Veritabanı Tablodan Veri Gösterme BETWEEB örneği</title>
</head>

<body>
<?php 

echo "SELECT * FROM mezun_ogrenci WHERE aldigi_not_vize BETWEEN 50 AND 70";  // ÖĞRENCİ NOTU 50 İLE 70 ARASINDA OLANLARI GÖSTERİR

echo "<br><br>";

echo "SELECT * FROM mezun_ogrenci WHERE aldigi_not_vize NOT BETWEEN 50 AND 70";  // ÖĞRENCİ NOTU 50 İLE 70 ARASINDA OLMAYANLARI GÖSTERİR

echo "<br><br>";

echo "SELECT * FROM mezun_ogrenci WHERE aldigi_not_vize BETWEEN 50 AND 100 AND `ogrenci_id` NOT IN (1,2)";  // ÖĞRENCİ NOTU 50 İLE 100 ARASINDA OLAN ANCAK ÖĞRENCİ ID'Sİ 1 VE 2 OLMAYANLAR GÖSTERİR


echo "<br><br>";

echo "SELECT * FROM mezun_ogrenci WHERE mezuniyet_tarihi BETWEEN '01/01/1999' AND '01/01/2015'";  // ÖMEZUNİYET TARİHİ BELİRTİLEN TARİHLER ARASINDA İSE GÖSTERİR

?>

</body>

</html>
