<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>PHP ile MySQL Veritabanı Tablodan Veri Gösterme ORDER BY rneği</title>
<?php echo '
         <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

 '; ?>
</head>
<body>
<?php 
// ----------------------------------------------------------------------------------------------------------------------------
require_once("_baglanti.php");	// Veritabanına Bağlantı DOSYAYI ÇEKTİK. 
// ----------------------------------------------------------------------------------------------------------------------------
?>

<div class="container">
	<div class="row">
		
        
        <div class="col-md-12">
        <h4>Bootstrap Snipp for Datatable</h4>
        <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                  <th><input type="checkbox" id="checkall" /></th>
                   <th>ID</th>
                   <th>Öprenci Adı</th>
                    <th>Öprenci Soyadı</th>
                     <th>Öprenci No</th>
                     <th>Aldığı Vize Notu</th>
                     <th>Aldığı Final Notu</th>
                     <th>Mezuniyet Yılı</th>
                      <th>Edit</th>
                      
                       <th>Delete</th>
                   </thead>
    <tbody>
<?php 
$sorgu = mysqli_query($db,"SELECT * FROM `mezun_ogrenci` WHERE ogrenci_adi LIKE '%M%' ORDER BY `ogrenci_soyadi` ASC");

while($sonuc = mysqli_fetch_array($sorgu))
{ 

?>
   
    <tr>
    <td><input type="checkbox" class="checkthis" /></td>
    <td><?php echo $sonuc['ogrenci_id']; ?></td>
    <td><?php echo $sonuc['ogrenci_adi']; ?></td>
    <td><?php echo $sonuc['ogrenci_soyadi']; ?></td>
    <td><?php echo $sonuc['ogrenci_no']; ?></td>
    <td><?php echo $sonuc['aldigi_not_vize']; ?></td>
    <td><?php echo $sonuc['aldigi_not_final']; ?></td>
    <td><?php echo $sonuc['mezuniyet_tarihi	']; ?></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
</tr>
 <?php } // while Döngüsü ?>
   
     
    </tbody>
        
</table>

<div class="clearfix"></div>
<ul class="pagination pull-right">
  <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
  <li class="active"><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
  <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
</ul>
                
            </div>
            
        </div>
	</div>
</div>

<?php 

$sorgu = mysqli_query($db,"SELECT * FROM `mezun_ogrenci` WHERE ogrenci_adi LIKE '%A%'");

while($sonuc = mysqli_fetch_array($sorgu))
{

echo $ogrenci_id 			= $sonuc['ogrenci_id']." - ";
echo $ogrenci_adi 			= $sonuc['ogrenci_adi']." ";
echo $ogrenci_soyadi		= $sonuc['ogrenci_soyadi']." ";
echo $ogrenci_no			= $sonuc['ogrenci_no']." ";
echo $aldigi_not_vize		= $sonuc['aldigi_not_vize']." ";
echo $aldigi_not_final 		= $sonuc['aldigi_not_final']." ";
echo $mezuniyet_tarihi		= $sonuc['mezuniyet_tarihi']."<br>";

} //while

?>


<br><br><br><br><br>
ÖRNEK LİKE KOMUTLARI

<?php 

echo "SELECT * FROM `mezun_ogrenci` WHERE ogrenci_adi LIKE '%A%'";  // ÖĞRENCİ ADININ İÇİNDE (A) OLANLARI GÖSTERİR

echo "<br><br>";

echo "SELECT * FROM `mezun_ogrenci` WHERE ogrenci_adi LIKE 'A%'";  // ÖĞRENCİ ADININ BAŞ HARFLERİN (A) OLANLARI GÖSTERİR

echo "<br><br>";

echo "SELECT * FROM `mezun_ogrenci` WHERE ogrenci_adi LIKE '%A'";  // ÖĞRENCİ ADININ SON HARFLERİN (A) OLANLARI GÖSTERİR

echo "<br><br>";

echo "SELECT * FROM `mezun_ogrenci` WHERE ogrenci_adi LIKE '_S%'";  // ÖĞRENCİ ADININ İKİNCİ HARFLERİN (S) OLANLARI GÖSTERİR

echo "<br><br>";

echo "SELECT * FROM `mezun_ogrenci` WHERE ogrenci_adi LIKE 'a__%'";  // ÖĞRENCİ ADININ İLK HARFİ (A) İLE BAŞLAYAN VE ENAZ 3 KARAKTERLİ OLANLARI GÖSTERİR

echo "<br><br>";

echo "SELECT * FROM `mezun_ogrenci` WHERE ogrenci_adi LIKE 'İ%L'";  // ÖĞRENCİ ADININ İLK HARFİ (İ) İLE BAŞLAYAN VE (L) İLE BİRENLERİ GÖSTERİR

echo "<br><br>";

echo "SELECT * FROM `mezun_ogrenci` WHERE ogrenci_adi NOT LIKE 'a%'";   // ÖĞRENCİ ADINDA (A) İLE BAŞLAMAYANLARI GÖSTERİR

?>


<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
      </div>
          <div class="modal-body">
          <div class="form-group">
        <input class="form-control " type="text" placeholder="Mohsin">
        </div>
        <div class="form-group">
        
        <input class="form-control " type="text" placeholder="Irshad">
        </div>
        <div class="form-group">
        <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>
    
        
        </div>
      </div>
          <div class="modal-footer ">
        <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span>Â Update</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
    
    
    
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
      </div>
          <div class="modal-body">
       
       <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
       
      </div>
        <div class="modal-footer ">
        <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span>Â Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Â No</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
<script type="text/javascript">
$(document).ready(function(){
$("#mytable #checkall").click(function () {
        if ($("#mytable #checkall").is(':checked')) {
            $("#mytable input[type=checkbox]").each(function () {
                $(this).prop("checked", true);
            });

        } else {
            $("#mytable input[type=checkbox]").each(function () {
                $(this).prop("checked", false);
            });
        }
    });
    
    $("[data-toggle=tooltip]").tooltip();
});

</script>
</body>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>PHP ile MySQL Veritabanı Tablodan Veri Gösterme LIKE Örnekleri</title>
</head>

<body>

</body>

</html>
