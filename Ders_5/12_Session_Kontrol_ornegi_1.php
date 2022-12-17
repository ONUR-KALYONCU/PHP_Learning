<?php 
session_start();

$_SESSION['deneme'] = "Deneme Session İçeriği";

if (isset($_SESSION['deneme'])) {				// Gelen Çerez DOLU İSE
	echo "Session : ".$_SESSION['deneme'];
}else{
	echo "Session bulunamadı";
}
?>
<!DOCTYPE html>

<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Session Kontrol - Örnek -1</title>
</head>

<body>


</body>

</html>