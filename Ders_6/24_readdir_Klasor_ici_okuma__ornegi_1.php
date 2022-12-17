<!DOCTYPE html>

<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Dosya Klasör İçi Okuma/Gösterme - Örnek -1</title>
</head>

<body>
<?php
// readdir(); Açılmış bir klasörün içini okur.

$dir = "bir/";	// Kontrol edilecek Klasör Dizin adı

// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
      echo "filename:" . $file . "<br>";
    }
    closedir($dh);
  }
}
?>

</body>

</html>