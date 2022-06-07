<?php 
//try komutu ile hata yaptıysak catch'ın altında ki komut bizim hata satırımızı bastırır eğer yapmadıysak try komutunun altına yazdığımız kod çalışıyor.Bağlantı yöntemimizi belirliyoruz ve pdo kullanıyoruz. Pdo veritabanını bağlamak için kullanılan bir eklentidir. güvenlidir.
try {
	$baglanti=new PDO('mysql:host=localhost; dbname=programlamablogum; charset=utf8' , 'root' , '');
	#echo "Bağlantı Başarılı";
} catch (Exception $e) {
	echo "Hata yaptın:".$e->getMessage();
}


 ?>