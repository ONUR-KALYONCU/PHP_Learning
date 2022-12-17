<?php 
/*
Oluşturduğumuz bir çerezi silmek için yine normal bir çerez tanımlarmış gibi setcookie() fonksiyonunu kullanıyoruz. 
Tek fark 3. son kullanma tarihi paramtremize geçmiş bir zaman giriyoruz. 
Bu sayede çerezin tarihi dolmuş varsayılıp hemen siliniyor. 
Örnek olarak bu çereze time() – 3600 diyerek 1 saat öncesini göstereceğiz ve çerez silinmiş olacak:
*/
setcookie("cerezim","1234",time()-3600);  // Zaman aşımı olarak time() fonksiyonunu kullandık ve 3600 sn. yani 1 saat geçerli olacak şekilde belirttik.

	echo @$_COOKIE["cerezim"];  // Çerez başına (@) işareti koyarsanız Çerez Boş Olsa dahi Ekrana Hata Mesajı Yazdırmaz (Mutlaka Çerezlerde @ İşareti kullanın)

?>
<!DOCTYPE html>

<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Çerez Silme - Örnek -1</title>
</head>

<body>


</body>

</html>