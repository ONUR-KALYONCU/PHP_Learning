<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Dizinin Fonksiyona Gönderilmesi-Örnek</title>
</head>

<body>

<?php

function liste_yaz($gelendizi)
{
	for ($i=0;$i<count($gelendizi);$i++)
	echo $gelendizi[$i]."<br>";
}

$gelendizi=array(6,8,10,7);
liste_yaz($gelendizi);

?>
 
</body>

</html>