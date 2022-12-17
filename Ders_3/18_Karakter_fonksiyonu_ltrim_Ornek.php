<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>ltrim() fonksiyonu</title>
</head>

<body>

<?php
// Dizgenin başındaki boşlukları (veya diğer karakterleri) budar. Aşağıdaki karakterleri budar.

$str = "    Selam Dünya!";
echo "ltrim olmadan: " . $str;
echo "<br>";
echo "ltrim ile: " . ltrim($str);

?>

</body>

</html>