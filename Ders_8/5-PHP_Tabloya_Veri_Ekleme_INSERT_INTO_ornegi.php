<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>PHP ile MySQL Veritabanı Tabloya Veri Ekleme Örneği</title>
</head>

<body>
<?php   // VERİTABANINA KAYIT EKLEME 


// ----------------------------------------------------------------------------------------------------------------------------
require_once("_baglanti.php");	// Veritabanına Bağlantı DOSYAYI ÇEKTİK. 
// ----------------------------------------------------------------------------------------------------------------------------

$sql = "INSERT INTO `uyeler`(`uye_id`, `uye_adi`, `uye_soyadi`, `kullanici_adi`, `kullanici_sifre`, `uye_e_posta`, `uye_telefon`, `uye_sehir`) 
		VALUES ('','İsmail','KEKLİK','deneme@gmail.com','1234','deneme@gmail.com','0512 345 4521','Ankara')";

mysqli_query($db,$sql);						// Bağlı Olan Veribanına Bağlan ve Oluştur.

echo 'Öğrenci Veritabanında "ÜYELER" Tablosuna Veri EKLENDİ.';


?>
<br><br><br>
FORMDAN GELEN ÖRNEK VERİ EKLEMELER
<br><br>
$gelen_kullanici_adi = $_POST['kullanici_adi'];  // FORMDAN GELEN DEĞER  <br><br>

$sql = "INSERT INTO `uyeler`(`uye_soyadi`) VALUES ('".$_POST['kullanici_adi']."')"; // VERİ EKLEME ÖRNEĞİ -1<br><br>
$sql = "INSERT INTO `uyeler`(`uye_soyadi`) VALUES ('$gelen_kullanici_adi ')";		// VERİ EKLEME ÖRNEĞİ -2


</body>

</html>
