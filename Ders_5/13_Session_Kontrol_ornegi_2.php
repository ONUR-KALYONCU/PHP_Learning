<?php 
session_start();

$_SESSION['deneme'] = "Deneme Session İçeriği";
?>
<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Session Kontrol - Örnek -2</title>
</head>

<body>
<?php
if(count($_SESSION) > 0) { // Gelen Session 0 Dan BÜYÜK ( DOLU ) İSE

  echo "Session var.";
  
} else {

  echo "Session yok.";
  
}
?>


</body>

</html>