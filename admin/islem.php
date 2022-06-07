<!-- bu sayfa bizim için kilit nokta çünkü burada biz veritabanına ekleme,silme görme işlemini buradan yapıcaz. -->
<?php 
require_once 'baglanti.php';		
//formumuzun gelip gelmediğini kontrol eden test komutu.isset böyle bir değer var mı yok mu onu test ediyor.
if(isset($_POST['ayarkaydet'])){
$kaydet=$baglanti->prepare("UPDATE ayarlar SET 

ayar_baslik=:ayar_baslik,
ayar_aciklama=:ayar_aciklama,
ayar_anahtar=:ayar_anahtar,
ayar_adres=:ayar_adres,
ayar_telefon=:ayar_telefon,
ayar_email=:ayar_email
    ");

$update=$kaydet->execute(array(

'ayar_baslik'=>htmlspecialchars($_POST['baslik']),
'ayar_aciklama'=>htmlspecialchars($_POST['aciklama']),
'ayar_anahtar'=>htmlspecialchars($_POST['anahtar']),
'ayar_adres'=>htmlspecialchars($_POST['adres']),
'ayar_telefon'=>htmlspecialchars($_POST['telefon']),
'ayar_email'=>htmlspecialchars($_POST['email'])
));
if ($update) {
header("Location:ayarlar.php?sayfa=ayarlar&durum=başarılı.");
}else{
	header("Location:ayarlar.php?sayfa=ayarlar&durum=başarısız.");
}
}
if (isset($_POST['sosyalmedyakaydet']))
	if(isset($_POST['ayarkaydet'])){
$kaydet=$baglanti->prepare("UPDATE ayarlar SET 
ayar_facebook=:ayar_facebook,
ayar_instagram=:ayar_instagram,
ayar_youtube=:ayar_youtube,
ayar_twitter=:ayar_twitter
    ");
$update=$kaydet->execute(array(

'ayar_facebook'=>htmlspecialchars($_POST['facebook']),
'ayar_instagram'=>htmlspecialchars($_POST['instagram']),
'ayar_youtube'=>htmlspecialchars($_POST['youtube']),
'ayar_twitter'=>htmlspecialchars($_POST['twitter'])
));
if ($update) {
header("Location:ayarlar.php?sayfa=sosyalmedya&durum=başarılı.");
}else{
	header("Location:ayarlar.php?sayfa=sosyalmedya&durum=başarısız.");
}
}




if(isset($_POST['hakkimizdakaydet'])){
//önce resim 0 mb den büyükse aşağıdaki işlemleri yapmasını söyledik. 1 ile 1 milyon arasında 3 tane sayı ürettik ve sayıları birleştirdik ve resimadi diyerek de sayularla isimlerini aldık daha sonra da önce resmin değerini sonra yükleneceği klasörü belirttik
//

if ( $_FILES['resim'] ["size"]>0 ) {

$uploads_dir='resimler/hakkimizda';
@$tmp_name=$_FILES['resim']	["tmp_name"];
@$name=$_FILES['resim'] ["name"];

$sayi1=rand(1,10000000);
$sayi2=rand(1,10000000);
$sayi3=rand(1,10000000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimadi=$sayilar.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");


$kaydet=$baglanti->prepare("UPDATE hakkimizda SET 

hakkimizda_baslik=:hakkimizda_baslik,
hakkimizda_aciklama=:hakkimizda_aciklama,
hakkimizda_resim=:hakkimizda_resim
    ");

$update=$kaydet->execute(array(

'hakkimizda_baslik'=>htmlspecialchars($_POST['baslik']),
'hakkimizda_aciklama'=>$_POST['aciklama'],
'hakkimizda_resim'=>$resimadi
));

if ($update) {
	$eskiresim=$_POST['eskiresim'];
	unlink("resimler/hakkimizda/$eskiresim");
header("Location:hakkimizda.php?durum=başarılı.");
}else{
	header("Location:hakkimizda.php?durum=başarısız.");
}
}


else{
$kaydet=$baglanti->prepare("UPDATE hakkimizda SET 

hakkimizda_baslik=:hakkimizda_baslik,
hakkimizda_aciklama=:hakkimizda_aciklama

    ");

$update=$kaydet->execute(array(

'hakkimizda_baslik'=>htmlspecialchars($_POST['baslik']),
'hakkimizda_aciklama'=>$_POST['aciklama']
));

if ($update) {
header("Location:hakkimizda.php?durum=başarılı.");
}else{
	header("Location:hakkimizda.php?durum=başarısız.");

}
}
}



if(isset($_POST['sliderkaydet'])){

if ( $_FILES['resim'] ["size"]>0 ) {

$uploads_dir='resimler/slider';
@$tmp_name=$_FILES['resim']	["tmp_name"];
@$name=$_FILES['resim'] ["name"];

$sayi1=rand(1,10000000);
$sayi2=rand(1,10000000);
$sayi3=rand(1,10000000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimadi=$sayilar.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");


$kaydet=$baglanti->prepare("UPDATE slider SET 

slider_baslik=:slider_baslik,
slider_aciklama=:slider_aciklama,
slider_buton=:slider_buton,
slider_link=:slider_link,
slider_resim=:slider_resim
    ");

$update=$kaydet->execute(array(

'slider_baslik'=>$_POST['baslik'],
'slider_aciklama'=>$_POST['aciklama'],
'slider_buton'=>$_POST['buton'],
'slider_link'=>$_POST['link'],
'slider_resim'=>$resimadi
));

if ($update) {
	$eskiresim=$_POST['eskiresim'];
	unlink("resimler/slider/$eskiresim");
header("Location:slider.php?durum=başarılı.");
}else{
	header("Location:slider.php?durum=başarısız.");
}
}


else{
$kaydet=$baglanti->prepare("UPDATE slider SET 

slider_baslik=:slider_baslik,
slider_aciklama=:slider_aciklama,
slider_buton=:slider_buton,
slider_link=:slider_link

    ");

$update=$kaydet->execute(array(

'slider_baslik'=>$_POST['baslik'],
'slider_aciklama'=>$_POST['aciklama'],
'slider_buton'=>$_POST['buton'],
'slider_link'=>$_POST['link']
));

if ($update) {
header("Location:slider.php?durum=başarılı.");
}else{
	header("Location:slider.php?durum=başarısız.");

}
}
}




if (isset($_POST['ekipkaydet'])) {
	$uploads_dir='resimler/ekip';
@$tmp_name=$_FILES['resim'] ["tmp_name"];
@$name=$_FILES['resim'] ["name"];

$sayi1=rand(1,10000000);
$sayi2=rand(1,10000000);
$sayi3=rand(1,10000000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimadi=$sayilar.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");


$kaydet=$baglanti->prepare("INSERT into ekip SET 

ekip_isim=:ekip_isim,
ekip_konum=:ekip_konum,
ekip_sira=:ekip_sira,
ekip_aciklama=:ekip_aciklama,
ekip_twitter=:ekip_twitter,
ekip_instagram=:ekip_instagram,
ekip_youtube=:ekip_youtube,
ekip_resim=:ekip_resim
	");
$insert=$kaydet->execute(array(

'ekip_isim'=>htmlspecialchars($_POST['isim']),
'ekip_konum'=>htmlspecialchars($_POST['konum']),
'ekip_sira'=>htmlspecialchars($_POST['sira']),
'ekip_aciklama'=>$_POST['aciklama'],
'ekip_twitter'=>htmlspecialchars($_POST['twitter']),
'ekip_instagram'=>htmlspecialchars($_POST['instagram']),
'ekip_youtube'=>htmlspecialchars($_POST['youtube']),
'ekip_resim'=>$resimadi
));


if ($insert) {
Header("Location:ekip.php?sayfa=ekip&durum=başarılı");
}else{
	Header("Location:ekip.php?sayfa=ekip&durum=başarısız");
}

}


if (isset($_POST['ekipduzenle'])) {

if ($_FILES['resim'] ["size"]>0) {

$uploads_dir='resimler/ekip';
@$tmp_name=$_FILES['resim'] ["tmp_name"];
@$name=$_FILES['resim'] ["name"];

$sayi1=rand(1,10000000);
$sayi2=rand(1,10000000);
$sayi3=rand(1,10000000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimadi=$sayilar.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");




$kaydet=$baglanti->prepare("UPDATE ekip SET 

ekip_isim=:ekip_isim,
ekip_konum=:ekip_konum,
ekip_sira=:ekip_sira,
ekip_aciklama=:ekip_aciklama,
ekip_twitter=:ekip_twitter,
ekip_instagram=:ekip_instagram,
ekip_youtube=:ekip_youtube,
ekip_resim=:ekip_resim
WHERE ekip_id={$_POST['id']}
	");
$update=$kaydet->execute(array(
'ekip_isim'=>htmlspecialchars($_POST['isim']),
'ekip_konum'=>htmlspecialchars($_POST['konum']),
'ekip_sira'=>htmlspecialchars($_POST['sira']),
'ekip_aciklama'=>$_POST['aciklama'],
'ekip_twitter'=>htmlspecialchars($_POST['twitter']),
'ekip_instagram'=>htmlspecialchars($_POST['instagram']),
'ekip_youtube'=>htmlspecialchars($_POST['youtube']),
'ekip_resim'=>$resimadi
));


if ($update) {
	$eskiresim=$_POST['eskiresim'];
	unlink("resimler/ekip/$eskiresim");
Header("Location:ekip.php?durum=başarılı");
}else{
	Header("Location:ekip.php?durum=başarısız");
}

}

else{

$kaydet=$baglanti->prepare("UPDATE ekip SET 
ekip_isim=:ekip_isim,
ekip_konum=:ekip_konum,
ekip_sira=:ekip_sira,
ekip_aciklama=:ekip_aciklama,
ekip_twitter=:ekip_twitter,
ekip_instagram=:ekip_instagram,
ekip_youtube=:ekip_youtube
WHERE ekip_id={$_POST['id']}

	");
$update=$kaydet->execute(array(

'ekip_isim'=>htmlspecialchars($_POST['isim']),
'ekip_konum'=>htmlspecialchars($_POST['konum']),
'ekip_sira'=>htmlspecialchars($_POST['sira']),
'ekip_aciklama'=>$_POST['aciklama'],
'ekip_twitter'=>htmlspecialchars($_POST['twitter']),
'ekip_instagram'=>htmlspecialchars($_POST['instagram']),
'ekip_youtube'=>htmlspecialchars($_POST['youtube'])
));
if ($update) {
Header("Location:ekip.php?durum=başarılı");
}else{
	Header("Location:ekip.php?durum=başarısız");
}

}


	}
if (isset($_POST['ekipsil'])) {

	$eskiresim=$_POST['eskiresim'];
	unlink("resimler/ekip/$eskiresim");
$sil=$baglanti->prepare("DELETE FROM ekip where ekip_id=:ekip_id");
$sil->execute(array('ekip_id'=>$_POST['id']

));
if($sil) {
	Header("Location:ekip.php?durum=başarılı");
}
else{
	Header("Location:ekip.php?durum=başarısız");
}
}


if (isset($_POST['galerikaydet'])) {
	$uploads_dir='resimler/galeri';
@$tmp_name=$_FILES['resim'] ["tmp_name"];
@$name=$_FILES['resim'] ["name"];

$sayi1=rand(1,10000000);
$sayi2=rand(1,10000000);
$sayi3=rand(1,10000000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimadi=$sayilar.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");


$kaydet=$baglanti->prepare("INSERT into galeri SET 

galeri_sira=:galeri_sira,

galeri_resim=:galeri_resim
	");
$insert=$kaydet->execute(array(

'galeri_sira'=>htmlspecialchars($_POST['sira']),

'galeri_resim'=>$resimadi
));


if ($insert) {
Header("Location:galeri.php?durum=başarılı");
}else{
	Header("Location:galeri.php?durum=başarısız");
}

}









if (isset($_POST['galeriduzenle'])) {

if ($_FILES['resim'] ["size"]>0) {

$uploads_dir='resimler/galeri';
@$tmp_name=$_FILES['resim'] ["tmp_name"];
@$name=$_FILES['resim'] ["name"];

$sayi1=rand(1,10000000);
$sayi2=rand(1,10000000);
$sayi3=rand(1,10000000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimadi=$sayilar.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");




$kaydet=$baglanti->prepare("UPDATE galeri SET 

galeri_sira=:galeri_sira,

galeri_resim=:galeri_resim
WHERE galeri_id={$_POST['id']}
	");
$update=$kaydet->execute(array(

'galeri_sira'=>htmlspecialchars($_POST['sira']),

'galeri_resim'=>$resimadi
));


if ($update) {
	$eskiresim=$_POST['eskiresim'];
	unlink("resimler/galeri/$eskiresim");
Header("Location:galeri.php?durum=başarılı");
}else{
	Header("Location:galeri.php?durum=başarısız");
}

}

else{

$kaydet=$baglanti->prepare("UPDATE galeri SET 
galeri_sira=:galeri_sira

WHERE galeri_id={$_POST['id']}

	");
$update=$kaydet->execute(array(

'galeri_sira'=>htmlspecialchars($_POST['sira'])

));
if ($update) {
Header("Location:galeri.php?durum=başarılı");
}else{
	Header("Location:galeri.php?durum=başarısız");
}

}


}




if (isset($_POST['galerisil'])) {
$eskiresim=$_POST['eskiresim'];
	unlink("resimler/galeri/$eskiresim");

$sil=$baglanti->prepare("DELETE  FROM galeri where galeri_id=:galeri_id");
$sil->execute(array(

'galeri_id'=>$_POST['id']
));


if ($sil) {
	Header("Location:galeri.php?durum=başarılı");
}
else{
		Header("Location:galeri.php?durum=başarısız");

}
}

if (isset($_POST['blogkaydet'])) {
	$uploads_dir='resimler/blog';
@$tmp_name=$_FILES['resim'] ["tmp_name"];
@$name=$_FILES['resim'] ["name"];

$sayi1=rand(1,10000000);
$sayi2=rand(1,10000000);
$sayi3=rand(1,10000000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimadi=$sayilar.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");


$kaydet=$baglanti->prepare("INSERT into blog SET 

blog_baslik=:blog_baslik,
blog_anahtarkelime=:blog_anahtarkelime,
blog_sira=:blog_sira,
blog_aciklama=:blog_aciklama,

blog_resim=:blog_resim
	");
$insert=$kaydet->execute(array(

'blog_baslik'=>htmlspecialchars($_POST['baslik']),
'blog_anahtarkelime'=>htmlspecialchars($_POST['anahtarkelime']),
'blog_sira'=>htmlspecialchars($_POST['sira']),
'blog_aciklama'=>$_POST['aciklama'],

'blog_resim'=>$resimadi
));




if ($insert) {
Header("Location:blog.php?durum=başarılı");
}else{
	Header("Location:blog.php?durum=başarısız");
}

}





if (isset($_POST['blogduzenle'])) {

if ($_FILES['resim'] ["size"]>0) {

$uploads_dir='resimler/blog';
@$tmp_name=$_FILES['resim'] ["tmp_name"];
@$name=$_FILES['resim'] ["name"];

$sayi1=rand(1,10000000);
$sayi2=rand(1,10000000);
$sayi3=rand(1,10000000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimadi=$sayilar.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");





$kaydet=$baglanti->prepare("UPDATE blog SET 


blog_baslik=:blog_baslik,
blog_anahtarkelime=:blog_anahtarkelime,
blog_sira=:blog_sira,
blog_aciklama=:blog_aciklama,

blog_resim=:blog_resim
WHERE blog_id={$_POST['id']}
	");
$update=$kaydet->execute(array(


'blog_baslik'=>htmlspecialchars($_POST['baslik']),
'blog_anahtarkelime'=>htmlspecialchars($_POST['anahtarkelime']),
'blog_sira'=>htmlspecialchars($_POST['sira']),
'blog_aciklama'=>$_POST['aciklama'],
'blog_resim'=>$resimadi
));


if ($update) {
	$eskiresim=$_POST['eskiresim'];
	unlink("resimler/blog/$eskiresim");
Header("Location:blog.php?durum=başarılı");
}else{
	Header("Location:blog.php?durum=başarısız");
}

}

else{


$kaydet=$baglanti->prepare("UPDATE blog SET 

blog_baslik=:blog_baslik,
blog_anahtarkelime=:blog_anahtarkelime,
blog_sira=:blog_sira,
blog_aciklama=:blog_aciklama

WHERE blog_id={$_POST['id']}

	");
$update=$kaydet->execute(array(
'blog_baslik'=>htmlspecialchars($_POST['baslik']),
'blog_anahtarkelime'=>htmlspecialchars($_POST['anahtarkelime']),
'blog_sira'=>htmlspecialchars($_POST['sira']),
'blog_aciklama'=>$_POST['aciklama']
));
if ($update) {
Header("Location:blog.php?durum=başarılı");
}else{
	Header("Location:blog.php?durum=başarısız");
}

}


}






if (isset($_POST['blogsil'])) {
$eskiresim=$_POST['eskiresim'];
	unlink("resimler/blog/$eskiresim");

$sil=$baglanti->prepare("DELETE  FROM blog where blog_id=:blog_id");
$sil->execute(array(

'blog_id'=>$_POST['id']
));


if ($sil) {
	Header("Location:blog.php?durum=başarılı");
}
else{
		Header("Location:blog.php?durum=başarısız");

}
}
if (isset($_POST['kategorikaydet'])) {
	

$kaydet=$baglanti->prepare("INSERT into kategori SET 

kategori_baslik=:kategori_baslik,

kategori_sira=:kategori_sira,
kategori_durum=:kategori_durum
	");
$insert=$kaydet->execute(array(

'kategori_baslik'=>htmlspecialchars($_POST['baslik']),

'kategori_sira'=>htmlspecialchars($_POST['sira']),
'kategori_durum'=>htmlspecialchars($_POST['durum'])
));




if ($insert) {
Header("Location:kategori.php?durum=başarılı");
}else{
	Header("Location:kategori.php?durum=başarısız");
}

}




if (isset($_POST['kategoriduzenle'])) {

$duzenle=$baglanti->prepare("UPDATE kategori SET 
kategori_baslik=:kategori_baslik,

kategori_sira=:kategori_sira,
kategori_durum=:kategori_durum

WHERE kategori_id={$_POST['id']}

	");
$update=$duzenle->execute(array(


'kategori_baslik'=>htmlspecialchars($_POST['baslik']),

'kategori_sira'=>htmlspecialchars($_POST['sira']),
'kategori_durum'=>htmlspecialchars($_POST['durum'])

));
if ($update) {
Header("Location:kategori.php?durum=başarılı");
}else{
	Header("Location:kategori.php?durum=başarısız");
}

}


if (isset($_GET['kategorisil'])) {

$sil=$baglanti->prepare("DELETE  FROM kategori where kategori_id=:kategori_id");
$sil->execute(array(

'kategori_id'=>$_GET['id']
));


if ($sil) {
	Header("Location:kategori.php?durum=başarılı");
}
else{
		Header("Location:kategori.php?durum=başarısız");

}
}





if (isset($_POST['icerikkaydet'])) {
	$katid=$_POST['katid'];
	$uploads_dir='resimler/icerik';
@$tmp_name=$_FILES['resim'] ["tmp_name"];
@$name=$_FILES['resim'] ["name"];

$sayi1=rand(1,10000000);
$sayi2=rand(1,10000000);
$sayi3=rand(1,10000000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimadi=$sayilar.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");


$kaydet=$baglanti->prepare("INSERT into icerik SET 


icerik_baslik=:icerik_baslik,

icerik_sira=:icerik_sira,
icerik_aciklama=:icerik_aciklama,
kategori_id=:kategori_id,
icerik_anahtarkelime=:icerik_anahtarkelime,
icerik_resim=:icerik_resim
	");
$insert=$kaydet->execute(array(

'icerik_baslik'=>htmlspecialchars($_POST['baslik']),
'icerik_sira'=>htmlspecialchars($_POST['sira']),
'icerik_aciklama'=>$_POST['aciklama'],
'kategori_id'=>htmlspecialchars($_POST['katid']),
'icerik_anahtarkelime'=>htmlspecialchars($_POST['icerikanahtar']),
'icerik_resim'=>$resimadi
));


if ($insert) {
Header("Location:icerik.php?katid=$katid&durum=başarılı");
}else{
	Header("Location:icerik.php?katid=$katid&durum=başarısız");
}

}











if (isset($_POST['iceriksil'])) {
	$katid=$_POST['katid'];
$eskiresim=$_POST['eskiresim'];
	unlink("resimler/icerik/$eskiresim");

$sil=$baglanti->prepare("DELETE  FROM icerik where icerik_id=:icerik_id");
$sil->execute(array(

'icerik_id'=>$_POST['id']
));


if ($sil) {
	Header("Location:icerik.php?katid=$katid&durum=başarılı");
}
else{
		Header("Location:icerik.php?katid=$katid&durum=başarısız");

}
}








if (isset($_POST['icerikduzenle'])) {
$katid=$_POST['katid'];
if ($_FILES['resim'] ["size"]>0) {

$uploads_dir='resimler/icerik';
@$tmp_name=$_FILES['resim'] ["tmp_name"];
@$name=$_FILES['resim'] ["name"];

$sayi1=rand(1,10000000);
$sayi2=rand(1,10000000);
$sayi3=rand(1,10000000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimadi=$sayilar.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");


$kaydet=$baglanti->prepare("UPDATE icerik SET 
icerik_baslik=:icerik_baslik,

icerik_sira=:icerik_sira,
icerik_aciklama=:icerik_aciklama,
kategori_id=:kategori_id,
icerik_anahtarkelime=:icerik_anahtarkelime,
icerik_resim=:icerik_resim

WHERE icerik_id={$_POST['id']}
	");
$update=$kaydet->execute(array(



'icerik_baslik'=>htmlspecialchars($_POST['baslik']),
'icerik_sira'=>htmlspecialchars($_POST['sira']),
'icerik_aciklama'=>$_POST['aciklama'],
'kategori_id'=>htmlspecialchars($_POST['katid']),
'icerik_anahtarkelime'=>htmlspecialchars($_POST['icerikanahtar']),
'icerik_resim'=>$resimadi

));


if ($update) {
	$eskiresim=$_POST['eskiresim'];
	unlink("resimler/icerik/$eskiresim");
Header("Location:icerik.php?katid=$katid&durum=başarılı");
}else{
Header("Location:icerik.php?katid=$katid&durum=başarısız");
}

}

else{

$kaydet=$baglanti->prepare("UPDATE icerik SET 
icerik_baslik=:icerik_baslik,

icerik_sira=:icerik_sira,
icerik_aciklama=:icerik_aciklama,
kategori_id=:kategori_id,
icerik_anahtarkelime=:icerik_anahtarkelime

WHERE icerik_id={$_POST['id']}

	");
$update=$kaydet->execute(array(



'icerik_baslik'=>htmlspecialchars($_POST['baslik']),
'icerik_sira'=>htmlspecialchars($_POST['sira']),
'icerik_aciklama'=>$_POST['aciklama'],
'kategori_id'=>htmlspecialchars($_POST['katid']),
'icerik_anahtarkelime'=>htmlspecialchars($_POST['icerikanahtar'])
));
if ($update) {
Header("Location:icerik.php?katid=$katid&durum=başarılı");
}else{
Header("Location:icerik.php?katid=$katid&durum=başarısız");
}

}


}



 ?>
