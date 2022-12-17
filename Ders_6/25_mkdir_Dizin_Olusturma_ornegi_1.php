<!DOCTYPE html>

<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Klasör / Dizin Oluşturma - Örnek -1</title>
</head>

<body>
<?php 

// mkdir(); Dizin oluşturur.

$olusacak_dizin = "test";		// Kontrol edilecek Dizin Klasör adı

$dosya = $olusacak_dizin;
  
if (file_exists($dosya)) 
{
    echo "$dosya isimli dosya zaten var";
}
else 
{
    echo "$dosya diye bir dosya Oluşturuldu";
    mkdir("test");

}

?>

</body>

</html>