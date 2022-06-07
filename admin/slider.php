

<?php require_once 'header.php'; 
 require_once 'sidebar.php'; 

$slidersor=$baglanti->prepare("SELECT * FROM slider where slider_id=?");
$slidersor->execute(array(1));
$slidercek=$slidersor->fetch(PDO::FETCH_ASSOC);

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
                <h3 class="card-title">Slider</h3>
              </div>
            
              <!-- form start 
                kullacıların anlık olarak yaptığı değişikleri islem.php de görmek için action ile yazıyoruz ve eğer bilgilerimiz önemli değilse google tarafından öne çıkmasını istemiyorsak post methodu kullanıyoruz. -->
              <form action="islem.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                   <div class="form-group">
                    <label for="exampleInputEmail1">Slider Resim</label>
                    <img style="widows: 200px" src="resimler/slider/<?php echo $slidercek['slider_resim']?>">
                  </div>
                  <input type="hidden" name="eskiresim" value="<?php echo $slidercek['slider_resim'] ?>" >
                  <div class="form-group">
                    <label for="exampleInputEmail1">Resim</label>
                    <input name="resim"  type="file" class="form-control">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Slider Başlık</label>
                    <input name="baslik" value="<?php echo $slidercek['slider_baslik'] ?>" type="text" class="form-control"placeholder="Lütfen Sitenizin başlığını giriniz.">
                  </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Slider Buton İsmi</label>
                    <input name="buton" value="<?php echo $slidercek['slider_buton'] ?>" type="text" class="form-control"placeholder="Lütfen Sitenizin butonunu giriniz.">
                  </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Slider Buton Linki</label>
                    <input name="link" value="<?php echo $slidercek['slider_link'] ?>" type="text" class="form-control"placeholder="Lütfen Sitenizin linkini giriniz.">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Slider Açıklama</label>
                    <textarea name="aciklama" id="editor1" class="ckeditor"> <?php echo $slidercek['slider_aciklama'] ?></textarea>
                  </div>
                  
                   
                   
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="sliderkaydet" style="float:right;" type="submit" class="btn btn-primary">Kaydet</button>
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