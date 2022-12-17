<?php //<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />

// 0- GENEL AYARLAR ------------------------------------------------------------------------------------------------------------
// Açıklama : Sitenin Server Veritabanı Bağlantıkarının Bulunduğu Dosya. Sitenin Local Veritabanı, Sitenin Global Veritabanı
// -----------------------------------------------------------------------------------------------------------------------------
//$db_name = "0demo_eticaret_bayraklardunyasi";		//veritabanı
$db_name = "ogrenci";						//veritabanı
$db_user = "root"; 							//veritabanı kullanıcısı
$db_pass = ""; 								//kullanıcı ad şifresi
$db_host = "localhost";						//sunucu


$db = @mysqli_connect($db_host,$db_user,$db_pass,$db_name) or die ("Veritabanına bağlanırken bir hata ile karşılaşıldı");	//sunucuya bağlanma parametrekleri. Eğer sunucuya bağlanmaz ise or die hatasını verecektir. 
//mysql_select_db($db);						//veritabanı seçilir.	--> Php 5.3 ve üzeri veriyonlarda DESTEKLEMİYOR
// --------------------------------------- END ---------------------------------------------------------------------------------


// 1- YARDIMCI FUNCTİON KOMUTLARI ----------------------------------------------------------------------------------------------
// Açıklama : VERİTABANI DİL SETİ FUNCTİONU 
// -----------------------------------------------------------------------------------------------------------------------------
mysqli_set_charset($db, 'utf8');
//mysqli_query($db,"SET NAMES 'utf8'");	//--> Php 5.3 ve üzeri veriyonlarda DESTEKLEMİYOR

mb_http_input("utf-8");
mb_http_output("utf-8");
mb_internal_encoding('UTF-8');
// --------------------------------------- END ---------------------------------------------------------------------------------


// -----------------------------------------------------------------------------------------------------------------------------
// Açıklama : VERİTABANINDA OLMAYAN BİR VERİ ÇAĞIRDIĞINDA DEVREYE GİRER VE KULLANICIYA HİÇ BİRŞEY GÖSTERMEZ
// -----------------------------------------------------------------------------------------------------------------------------
error_reporting(0); 
// --------------------------------------- END ---------------------------------------------------------------------------------

// -----------------------------------------------------------------------------------------------------------------------------
// Açıklama : mysqli_result KOMUTUNUN mysqli_result HALE DÖNÜŞTÜRME FUNCTİONU
// -----------------------------------------------------------------------------------------------------------------------------
function mysqli_result($result, $row, $field = 0) {
    if (!is_object($result)) {
		//echo 'object is expected in param1, ' . gettype($result) . ' is given';
        return NULL;
    }
    $result->data_seek($row); // right here is line 3
    $data = $result->fetch_array();

    return $data[$field];
   
    
}
// --------------------------------------- END ---------------------------------------------------------------------------------


// -----------------------------------------------------------------------------------------------------------------------------
// Açıklama : Mezun Öğrencilerin Tablosunun Bulunduğu Alan 
// -----------------------------------------------------------------------------------------------------------------------------
$ogrenci_tablosu = mysqli_query($db,"SELECT * FROM mezun_ogrenci ORDER BY ogrenci_id DESC LIMIT 0, 1");

$ogrenci_id 			= mysqli_result($ogrenci_tablosu,0,'ogrenci_id');
$ogrenci_adi 			= mysqli_result($ogrenci_tablosu,0,'ogrenci_adi');
$ogrenci_soyadi			= mysqli_result($ogrenci_tablosu,0,'ogrenci_soyadi');
$ogrenci_no				= mysqli_result($ogrenci_tablosu,0,'ogrenci_no');
$aldigi_not_vize		= mysqli_result($ogrenci_tablosu,0,'aldigi_not_vize');
$aldigi_not_final		= mysqli_result($ogrenci_tablosu,0,'aldigi_not_final');
$mezuniyet_tarihi		= mysqli_result($ogrenci_tablosu,0,'mezuniyet_tarihi');

// --------------------------------------- END ---------------------------------------------------------------------------------

?>