<?php 
setcookie("ad","İsmail",time() +(24*60*60)); // + (60*60*24) bu parametre şu anki zamana saniye cinsinden 60*60*24 tam olarak 24 saat yani 1 gün eklemiş olduk.

if (isset($_COOKIE['ad'])) {				// Gelen Çerez DOLU İSE
	echo "Adınız: ".$_COOKIE['ad'];
}else{
	echo "Cookie bulunamadı";
}
?>
<!DOCTYPE html>

<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Çerez Kontrol - Örnek -1</title>
</head>

<body>


</body>

</html>