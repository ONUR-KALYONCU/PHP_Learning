<?php //<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
// ----------------------------------------------------------------------------------------------------------------------------
// 100*50 boyutundaki resim alanı içerisine Yeşil renkte Oval Elips çizelim..
// ----------------------------------------------------------------------------------------------------------------------------

$image = imagecreatetruecolor(500, 300);						// 500x300 px değerinde 
$bg = imagecolorallocate($image, 205, 220, 200);				// Renk Tanımlanıyor... (0,0,0)=(RGB) Yani İlk değer RED(Kırmızı), İkinici DeğerGREEN (Yeşim), Üçüncü Değer BLUE(Mavi)

imagefill($image, 0, 0, $bg);									// Arka planı yukarıda seçilen renkle doldurun.
  
// Set the color of an ellipse.
$col_ellipse = imagecolorallocate($image, 0, 102, 0);			// Bir elipsin rengini ayarlayın.
   
// Function to draw the filled ellipse.
imagefilledellipse($image, 250, 150, 400, 250, $col_ellipse);	// Doldurulmuş elipsi çizme işlevi.
   
// Output of the image.
header("Content-type: image/png");
imagepng($image);												//Resmi oluşturalım 
?>
