<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Grafik Oluşturmada (imagejpeg) Kullanımı - Örneği</title>
</head>

<body>
<?php
// ----------------------------------------------------------------------------------------------------------------------------
/*     a.jpg isminde ve 75 kalite değerinde bir resmi */
 /*    dosyamızla aynı yere  oluşturacaktır.                        */
// ----------------------------------------------------------------------------------------------------------------------------
   $resim	=imagecreatetruecolor(100,50);  	 // 100x50 px değerinde 
    
   imagejpeg($resim,"a.jpg", "75"); 			// a.jpg isminde ve 75 kalite değerinde bir resim oluştur
   imagedestroy($resim);      					// Resmi bellekten sil

?>
</body>

</html>


