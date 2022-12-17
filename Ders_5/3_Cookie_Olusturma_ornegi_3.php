<?php 
/*
Şimdi 3. olarak girdiğimiz time() + (60*60*24) bu parametre şu anki zamana saniye cinsinden 60*60*24 tam olarak 24 saat yani 1 gün eklemiş olduk.
Bu oluşturduğumuz çerezin son kullanma tarihi şuandan itibaren + 24 saat sonra demek oluyor. 1 gün sonrasında bu çerez siteye girildiğinde gönderilmiyor olacak.
*/
setcookie("cerezim_ornek_3", "selam dünya", time() + (60*60*24));  // + (60*60*24) bu parametre şu anki zamana saniye cinsinden 60*60*24 tam olarak 24 saat yani 1 gün eklemiş olduk.

	echo @$_COOKIE["cerezim_ornek_3"];

?>
<!DOCTYPE html>

<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Çerez Oluşturma - Örnek -3</title>
</head>

<body>


</body>

</html>