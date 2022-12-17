<?php 
/*
Aşağıda ilk önce session kullanımını başlattık ve ardından aynı bir dizi tanımlarmış gibi $_SESSION global dizisine mesaj anahtarına Selam dünya! değerini verdik. 
Yani mesaj adında bir session oluşturduk ve değerini Selam dünya! yaptık.

Bu oluşturduğumuz değer giren kişinin tarayıcısı kapatılmadığı sürece gezdiği her sayfaya tekrar geri gönderilecek ve bir önceki sayfada yaptığı işlemleri, 
kullanıcı adı ya da şifre gibi verileri bu şekilde yeniden hatırlanmasını sağlayacak.
*/

session_start() ;
$_SESSION['mesaj'] = 'Selam dünya!';

echo $_SESSION['mesaj'];

$_SESSION['']


?>
<!DOCTYPE html>

<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Session Oluşturma - Örnek -1</title>
</head>

<body>


</body>

</html>