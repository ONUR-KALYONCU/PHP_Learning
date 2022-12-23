<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Grafik Oluşturmada (imagewbmp) Kullanımı - Örneği</title>
</head>

<body>
<?php
// ----------------------------------------------------------------------------------------------------------------------------
// 
// ----------------------------------------------------------------------------------------------------------------------------

$resim  = imagecreatefrompng('https://media.geeksforgeeks.org/wp-content/uploads/geeksforgeeks-13.png'); // PNG URL'sinden bir resim yükleyin
  
imagewbmp($resim, 'converted.wbmp');	// imagewbmp() işlevini kullanarak görüntüyü WBMP'ye dönüştürün
imagedestroy($resim);

?>

</body>

</html>


