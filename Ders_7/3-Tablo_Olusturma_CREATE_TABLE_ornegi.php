<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Veritabanına Tablo Oluşturma Örneği</title>
</head>

<body>
<?php 

echo "CREATE TABLE `ogrenci`.`mezun_ogrenci` 
	  (`ogrenci_id` INT AUTO_INCREMENT , 
	   `ogrenci_adi` VARCHAR(50), 
	    `ogrenci_soyadi` VARCHAR(50), 
	    `ogrenci_no` VARCHAR(25),
	    `aldigi_not_vize` VARCHAR(25), 
	    `aldigi_not_final` VARCHAR(25), 
	    `mezuniyet_tarihi` VARCHAR(50),    
	     PRIMARY KEY (`ogrenci_id`)) ENGINE = InnoDB;";

?>

</body>

</html>
