<?php 
setcookie("deneme", "", time() + 3600); // Zaman aşımı olarak time() fonksiyonunu kullandık ve 3600 sn. yani 1 saat geçerli olacak şekilde belirttik.
?>
<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Çerez Kontrol - Örnek -2</title>
</head>

<body>
<?php
if(count($_COOKIE) > 0) { // Gelen Çerez 0 Dan BÜYÜK ( DOLU ) İSE

  echo "Cookie var.";
  
} else {

  echo "Cookie yok.";
  
}
?>


</body>

</html>