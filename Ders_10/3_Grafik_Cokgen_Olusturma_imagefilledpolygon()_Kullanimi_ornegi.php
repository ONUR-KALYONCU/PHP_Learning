<?php //<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
// Kırık çizginin kırılma noktalarını içeren dizi
$values = array(
            40,  50,  // Nokta 1 (x, y)
            20,  240, // Nokta 2 (x, y)
            60,  60,  // Nokta 3 (x, y)
            240, 20,  // Nokta 4 (x, y)
            50,  40,  // Nokta 5 (x, y)
            10,  10   // Nokta 6 (x, y)
            );

// Tuvalimizi oluşturalım
$image = imagecreatetruecolor(250, 250);		// 100x50 px değerinde 

// Renk Tanımlanıyor... (0,0,0)=(RGB) Yani İlk değer RED(Kırmızı), İkinici DeğerGREEN (Yeşim), Üçüncü Değer BLUE(Mavi)
$bg   = imagecolorallocate($image, 0, 0, 0);	
$mavi = imagecolorallocate($image, 0, 0, 255);

// artalanı boyayalım
imagefilledrectangle($image, 0, 0, 249, 249, $bg);

// çokgeni çizelim
imagefilledpolygon($image, $values, 6, $mavi);

// görüntüyü çıktılayalım.
header('Content-Type: image/png');
imagepng($image);
imagedestroy($image);
?>

