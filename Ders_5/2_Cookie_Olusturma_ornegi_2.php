<?php 
/*
Alttaki örnekte setcookie komutu ile orange isimli bir cookie oluşturduk. 
Cookie’nin değerini 1234 olarak tanımladık. 
Zaman aşımı olarak time() fonksiyonunu kullandık ve 3600 sn. 
yani 1 saat geçerli olacak şekilde belirttik. 
Son olarak echo komutu ile emyo isimli cookie’nin değerini ekrana yazdırdık. 
Bu örneği test ettiğimizde ekrandaki çıktı 1234 olacaktır.
*/
setcookie("cerezim_ornek_2","orange",time()+3600); 	 // Zaman aşımı olarak time() fonksiyonunu kullandık ve 3600 sn. yani 1 saat geçerli olacak şekilde belirttik.

if(!empty($_COOKIE["cerezim_ornek_2"])){  			 // Gelen Çerez DOLU İSE

	echo $_COOKIE["cerezim_ornek_2"];
    $arkaplan_renk = 'style="background:orange"';
} else {

    $arkaplan_renk = 'style="background:red"';
}
?>
<!DOCTYPE html>

<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Çerez Oluşturma - Örnek -2</title>
</head>

<body <?php echo $arkaplan_renk; ?>>


</body>

</html>