<?php 
/*
Alttaki örnekte setcookie komutu ile 1234 isimli bir cookie oluşturduk. 
Cookie’nin değerini 1234 olarak tanımladık. 
Zaman aşımı olarak time() fonksiyonunu kullandık ve 3600 sn. 
yani 1 saat geçerli olacak şekilde belirttik. 
Son olarak echo komutu ile emyo isimli cookie’nin değerini ekrana yazdırdık. 
Bu örneği test ettiğimizde ekrandaki çıktı 1234 olacaktır.
*/
setcookie("cerezim_ornek_1","1234",time()+3600);  // Zaman aşımı olarak time() fonksiyonunu kullandık ve 3600 sn. yani 1 saat geçerli olacak şekilde belirttik.

	echo $_COOKIE["cerezim_ornek_1"]; 
	
	
?>
<!DOCTYPE html>

<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Çerez Oluşturma - Örnek -1</title>
</head>

<body>


</body>

</html>