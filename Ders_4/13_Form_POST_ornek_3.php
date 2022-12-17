<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Form POST Metoduyla Örnek -2</title>
</head>

<body>

   <form name="form1" method="post" action="13_Form_POST_ornek_3_Sonuc.php">
      Birinci Sayı: <input type="text" name="sayi1"><br>
      İkinci Sayı: <input type="text" name="sayi2"><br>
      İşleminizi seçiniz:
      <select name="islem">
         <option value="+">Topla</option>
         <option value="-">Çıkar</option>
         <option value="*">Çarp</option>
         <option value="/">Böl</option>
      </select>
      <input type="submit"  value="Hesapla">
   </form>
</body>
</html>