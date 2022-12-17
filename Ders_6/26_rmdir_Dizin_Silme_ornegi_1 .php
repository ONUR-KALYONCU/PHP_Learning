<!DOCTYPE html>

<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Klasör / Dizin Silme - Örnek -1</title>
</head>

<body>
<?php 

// rmdir(); Dizin siler.

$silinecek_dizin = "test";		// Kontrol edilecek Dizin Klasör adı

$dosya = $silinecek_dizin;
  
if (file_exists($dosya)) 
{
    echo "$dosya isimli dosya silindi";
    rmdir("test");

}
else 
{
    echo "$dosya diye bir dosya yok";

}

?>

</body>

</html>