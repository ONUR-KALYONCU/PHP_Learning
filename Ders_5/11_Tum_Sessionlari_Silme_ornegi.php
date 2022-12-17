<?php 
// Bu işlem için session_destroy() fonksiyonunu kullanılır. Bu fonksiyon tanımlanmış tüm sessionları yok eder.

session_start();

$_SESSION['mesaj'] = 'Selam dünya!';
$_SESSION['bilgi'] = 'Ben Bir Bilgi Sessionuyum!';
$_SESSION['aciklama'] = 'Ben Bir Açıklama Sessionuyum!';

$_SESSION['aciklama'];


session_destroy();
?>
<!DOCTYPE html>

<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Tüm Sessionları Silme - Örnek -1</title>
</head>

<body>


</body>

</html>