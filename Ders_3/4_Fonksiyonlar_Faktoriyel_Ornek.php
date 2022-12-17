<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Fonksiyonlar - Faktöriyel</title>
</head>

<body>

<?php
function faktoriyel($sayi)
{
 if ($sayi==0) return(1);
	 $fakt=1;
	 
 for ($i=1; $i<=$sayi ; $i++)
 {    $fakt= $fakt * $i;  }
  return ($fakt);
}

  $num =6;
  $sonuc = faktoriyel ($num);
   echo $sonuc;  

?>
 
</body>

</html>