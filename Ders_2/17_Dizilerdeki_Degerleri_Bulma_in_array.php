<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Dizileri Değerleri Bulma</title>
</head>

<body>

<?php
// in_array ? dizinin elemanlarında içinde Belirttiğin eleman varmı kontrol eder

$kisiler = array("Ahmet", "Mehmet", "Hasan", "Hüseyin");

if (in_array("Mehmet", $kisiler))
  {
  echo "İçinde Var";
  }
else
  {
  echo "İçinde Yok";
  }
?>

</body>

</html>


