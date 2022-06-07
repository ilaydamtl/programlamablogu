

<?php require_once 'header.php'; 
 require_once 'sidebar.php'; 

$ayarsor=$baglanti->prepare("SELECT * FROM ayarlar where ayar_id=?");
$ayarsor->execute(array(1));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);


 ?>

<?php if (@$_GET['sayfa']=="ayarlar"){ ?>

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
                <h3 class="card-title">Ayarlar</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start 
                kullacıların anlık olarak yaptığı değişikleri islem.php de görmek için action ile yazıyoruz ve eğer bilgilerimiz önemli değilse google tarafından öne çıkmasını istemiyorsak post methodu kullanıyoruz. -->
              <form action="islem.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Site Başlığı</label>
                    <input name="baslik" value="<?php echo $ayarcek['ayar_baslik'] ?>" type="text" class="form-control"placeholder="Lütfen Sitenizin başlığını giriniz.">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Site Açıklaması</label>
                    <input name="aciklama" value="<?php echo $ayarcek['ayar_aciklama'] ?>" type="text" class="form-control"placeholder="Lütfen Sitenizin açıklamasını giriniz.">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Site Anahtar Kelime</label>
                    <input name="anahtar" value="<?php echo $ayarcek['ayar_anahtar'] ?>"type="text" class="form-control"placeholder="Lütfen Sitenizin anahtar kelimelerini giriniz.">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Site Adres</label>
                    <input name="adres" value="<?php echo $ayarcek['ayar_adres'] ?>" type="text" class="form-control"placeholder="Lütfen adresini giriniz.">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Site Telefon Numarası</label>
                    <input name="telefon" value="<?php echo $ayarcek['ayar_telefon'] ?>" type="text" class="form-control"placeholder="Lütfen Telefon numaranızı giriniz.">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Site Email Adresi</label>
                    <input name="email" value="<?php echo $ayarcek['ayar_email'] ?>" type="email" class="form-control"placeholder="Lütfen Email adresinizi giriniz.">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="ayarkaydet" style="float:right;" type="submit" class="btn btn-primary">Kaydet</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
        </div>
        </div>  
  </div>
</section>
</div>

<?php } elseif($_GET['sayfa']=="sosyalmedya"){ ?>

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
                <h3 class="card-title">Sosyal Medya Ayarları</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start 
                kullacıların anlık olarak yaptığı değişikleri islem.php de görmek için action ile yazıyoruz ve eğer bilgilerimiz önemli değilse google tarafından öne çıkmasını istemiyorsak post methodu kullanıyoruz. -->
              <form action="islem.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Facebook Adresi</label>
                    <input name="facebook" value="<?php echo $ayarcek['ayar_facebook'] ?>" type="text" class="form-control"placeholder="Lütfen Sitenizin başlığını giriniz.">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">İnstagram Adresi</label>
                    <input name="instagram" value="<?php echo $ayarcek['ayar_instagram'] ?>" type="text" class="form-control"placeholder="Lütfen Sitenizin açıklamasını giriniz.">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Youtube Adresi</label>
                    <input name="youtube" value="<?php echo $ayarcek['ayar_youtube'] ?>"type="text" class="form-control"placeholder="Lütfen Sitenizin anahtar kelimelerini giriniz.">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Twitter Adresi</label>
                    <input name="twitter" value="<?php echo $ayarcek['ayar_twitter'] ?>" type="text" class="form-control"placeholder="Lütfen adresini giriniz.">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="sosyalmedyakaydet" style="float:right;" type="submit" class="btn btn-primary">Kaydet</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
        </div>
        </div>  
  </div>
</section>
</div>

<?php }?>

 <?php require_once 'footer.php'; ?>