<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Grafik Oluşturmada (header) Kullanımı - Örneği</title>
</head>

<body>
<?php
// ----------------------------------------------------------------------------------------------------------------------------
// Grafik oluşturmaya başlarken ilk olarak bu sayfanın grafik olarak kullanılacağı header() fonksiyonu yardımıyla belirtilmesi gerekir.
// Yukardaki kodlama jpeg formatında bir grafik işlemi yapılacağını gösteriyor.  Çalışma PNG formatında olursa image/png yazılması gerekir.
// ----------------------------------------------------------------------------------------------------------------------------

header ("Content-type:image/jpeg");  // jpeg formatında bir grafik işlemi yapılacağını gösteriyor

?>
</body>

</html>


