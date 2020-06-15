<?php 
	ob_start();
	session_start();
	ini_set('display_errors',1);
	// VT bağlantısı dahil z kütüphanesi ayarlarını import et
	require(__DIR__.'/zcon.php');

	$sorgu="WHERE arsiv!=0";
	echo "<pre>";
	///$data=z(1,$sorgu,"","galeri");  //z(veri çekme,sorgu koşul,sütun,tablo adı);
	
	

	//print_r($data); //arrayleri  düzgün bastırmak için
	//_z(1,$sorgu,"","galeri"); // başına _ koy ekrana bastır..
	//echo $data[48]['url'];
	
	$tabloadi="furkan";
	$personel_ID=13;
	$nesne_IDcinsiyet=218;
	$nesne_IDaracmarka=221;
	$nesne_IDmeslek=224;
	$ad="halil";
	$soyad="barım";

	$array=[
		"personel_ID"=>13,
	"nesne_IDcinsiyet"=>218,
	"nesne_IDaracmarka"=>221,
	"nesne_IDmeslek"=>224,
	"ad"=>"halil",
	"soyad"=>"barım"

	];
	
	//_z(2,$array,$tabloadi);  ilk parametre 2 olduğunda ekleme yapar
	//$sorgu="WHERE ad='halil'";

	//_z(1,$sorgu,"","furkan");
	
	// $tabloadi="furkan";
	// $id=25;
	
	

	// $array=[
	
	// "ad"=>"furkan",
	// "soyad"=>"güneş"

	// ];

	//_z(3,$id,$array,$tabloadi); ilk parametre 3 olduğunda güncelleme işlemi yapar

	// for ($i=19; $i < 25 ; $i++) { 
	// 	_z(4,$i,$tabloadi);
	// }
	// $sorgu="WHERE ad='halil'";

	// $x = z(1,$sorgu,"","furkan");
	// _jz(1,$sorgu,"","furkan");
	// echo "<br>";

	//echo count($x);  //array adeti sayısı

	//$veriPost= z(8,'ad','sayi');//ilk parametre 7 olursa post 8 olursa get ikinci parametre gelen input name , ücüncü parametre kontrol (Sayi)
	
	//$veriValue = z(9,'ad','test'); // parametre 9  get ve post fark etmeksizin requestleri kabul eder..
	//echo !empty ($veriValue['ad']) ? 'veri var' : 'veri yok'; // koşul ? true bloğu : false bloğu;

	//print_r ($veriValue);
	// _z('date');	
	// echo '<br>';
	// _z('datetime');
	// echo '<br>';
	// _z('datetime','+15 years');	
	//$_TakimOyun=z(1,NULL,NULL,'furkan');
	//print_r($_TakimOyun);
	//_z(1,NULL,NULL,'furkan');

	//$_TakimOyun=z(37,z(1,NULL,NULL,'furkan')); //grupla 37. parametre bize veri tabanındaki bilgileri id değerlerine göre sıralar arraylerdeki 0. index olayını 1. indexten başlatır.
	//_z(38,$_TakimOyun);
	//print_r($_TakimOyun);

	// $_Firma=z(37,z(1,"WHERE arsiv<>'-1' AND ".z(38,$_X,'firma_ID'),'ID,ad','firma')); //sorguyu geri döndürür z 38. parametre

	// 	print_r ($_Firma);

	


	echo "</pre>";  //veri biçimi

?>


<?php ob_end_flush(); ?>