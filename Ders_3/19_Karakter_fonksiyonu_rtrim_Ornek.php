<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>rtrim() fonksiyonu</title>
</head>

<body>

<?php
// Dizgenin sonundaki boşlukları (veya diğer karakterleri) budar. Aşağıdaki karakterleri budar.


$str = "Selam Dünya!       ";
echo "rtrim olmadan: " . $str;
echo "<br>";
echo "rtrim ile: " . rtrim($str);

?>

</body>

</html>