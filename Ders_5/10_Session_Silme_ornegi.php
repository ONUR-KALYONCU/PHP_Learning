<?php 
/*
Session silme işleminde unset() fonksiyonunu kullanıyoruz.

Aşağıda önce bir session oluşturduk ve hemen ardından da onu sildik.
*/

session_start() ;
$_SESSION['mesaj'] = 'Selam dünya!';

unset ($_SESSION['mesaj']);  			// Session silme işleminde unset() fonksiyonunu kullanıyoruz.
?>
<!DOCTYPE html>

<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Session Silme - Örnek -1</title>
</head>

<body>


</body>

</html>