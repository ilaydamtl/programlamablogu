

<?php require_once 'header.php'; 
 require_once 'sidebar.php'; 

$hakkimizdasor=$baglanti->prepare("SELECT * FROM hakkimizda where hakkimizda_id=?");
$hakkimizdasor->execute(array(1));
$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);

 ?>



  <div class="content-wrapper">  
    <section class="content">
      <div class="container-fluid">
        <div class="row">
      <div class="col-md-12">
<div class="card card-primary">

  <!-- burada veritabına gönderiler eğer başarısız olursa durum mesajı olarak kırmızıyla başarısız, başarılıysa durum mesajı olarak yeşille başarılı yazmayı gösterdim.-->
  <?php 
if (@$_GET['durum']=="başarılı.") { ?> <p style="color: green;">İşlem Başarılı.</p> <?php }
elseif (@$_GET['durum']=="başarısız.") { ?> <p style="color: red;">İşlem Başarısız.</p> <?php }
  ?>
              <div class="card-header">
                <h3 class="card-title">Hakkımızda</h3>
              </div>
            
              <!-- form start 
                kullacıların anlık olarak yaptığı değişikleri islem.php de görmek için action ile yazıyoruz ve eğer bilgilerimiz önemli değilse google tarafından öne çıkmasını istemiyorsak post methodu kullanıyoruz. -->
              <form action="islem.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                   <div class="form-group">
                    <label for="exampleInputEmail1">Resim</label>
                    <img style="widows: 200px" src="resimler/hakkimizda/<?php echo $hakkimizdacek ['hakkimizda_resim'] ?>">
                  </div>
                  <input type="hidden" name="eskiresim"value="<?php echo $hakkimizdacek['hakkimizda_resim'] ?>">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Hakkımızda Resim</label>
                    <input name="resim"  type="file" class="form-control">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Hakkımızda Başlık</label>
                    <input name="baslik" value="<?php echo $hakkimizdacek['hakkimizda_baslik'] ?>" type="text" class="form-control"placeholder="Lütfen Sitenizin başlığını giriniz.">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Hakkımızda Açıklama</label>
                    <textarea name="aciklama" id="editor1" class="ckeditor"> <?php echo $hakkimizdacek['hakkimizda_aciklama'] ?></textarea>
                  </div>
                  
                   
                   
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="hakkimizdakaydet" style="float:right;" type="submit" class="btn btn-primary">Kaydet</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
        </div>
        </div>  
  </div>
</section>
</div>
 <?php require_once 'footer.php'; ?>