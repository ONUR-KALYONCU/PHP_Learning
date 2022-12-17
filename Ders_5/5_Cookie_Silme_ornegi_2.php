<?php 
/*
Örnek olarak bu çereze time() – (60*60*24) diyerek 1 gün öncesini göstereceğiz ve çerez silinmiş olacak:
*/
	
setcookie("cerezim_ornek_3", "selam dünya", time() - (60*60*24));  // - (60*60*24) bu parametre şu anki zamana saniye cinsinden 60*60*24 tam olarak 24 saat yani 1 gün eklemiş olduk.

	echo @$_COOKIE["cerezim_ornek_3"];

?>
<!DOCTYPE html>

<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Çerez Silme - Örnek -2</title>
</head>

<body>


</body>

</html>