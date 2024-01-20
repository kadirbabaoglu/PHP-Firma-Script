<?php
ob_start();
session_start();
include 'baglan.php';

if (isset($_POST['loggin'])) {
	
	$kullanici_ad = $_POST['kullanici_ad'];
	$kullanici_password = md5($_POST['kullanici_password']);
	
	if ($kullanici_ad && $kullanici_password) {
		
		$kullanicisor=$db->prepare("SELECT * From kullanici where kullanici_ad=:ad and kullanici_password=:password");
		$kullanicisor->execute(array(
			'ad' 		=> $kullanici_ad,
			'password' 	=> $kullanici_password
		));

		$say=$kullanicisor->RowCOUNT();

		if ($say>0) {

			$_SESSION['kullanici_ad'] = $kullanici_ad;

			header('location:../production/index.php');
		}else {
			header('location:../production/login.php?durum=no');
		}
		
	}
}


if (isset($_POST['genelayarkaydet'])) {

	$ayarkaydet=$db->prepare("UPDATE ayar SET 

		ayar_siteurl=:siteurl,
		ayar_title=:title,
		ayar_description=:description,
		ayar_keywords=:keywords,
		ayar_autor=:autor

		WHERE ayar_id=0");

	$update=$ayarkaydet->execute(array(

		'siteurl'		 => $_POST['ayar_siteurl'],
		'title'	 		 => $_POST['ayar_title'],
		'description'	 =>	$_POST['ayar_description'],
		'keywords' 		 => $_POST['ayar_keywords'],
		'autor' 		 => $_POST['ayar_autor']

	));



	if ($update) {
		

		Header("location:../production/genel-ayar.php?durum=ok");
	}else  {
		
		Header("location:../production/genel-ayar.php?durum=no");
	}

}


?>

<?php

if(isset($_POST['iletisimayarkaydet'])) {

	$ayarkaydet=$db->prepare("UPDATE ayar SET

		ayar_tel=:tel,
		ayar_gsm=:gsm,
		ayar_faks=:faks,
		ayar_adres=:adres,
		ayar_mail=:mail,
		ayar_il=:il,
		ayar_ilce=:ilce,
		ayar_mesai=:mesai

		WHERE ayar_id=0");

	$update=$ayarkaydet->execute(array(


		'tel' 	=> $_POST['ayar_tel'],
		'gsm' 	=> $_POST['ayar_gsm'],
		'faks'	=> $_POST['ayar_faks'],
		'adres' => $_POST['ayar_adres'],
		'mail'  => $_POST['ayar_mail'],
		'il'    => $_POST['ayar_il'],
		'ilce' 	=> $_POST['ayar_ilce'],
		'mesai'	=> $_POST['ayar_mesai']


	));	

	if ($update) {


		Header("location:../production/iletisim-ayar.php?durum=ok");
	} else {

		header("location:../production/iletisim-ayar.php?durum=no");
	}

}

?>

<?php

if (isset($_POST['apiayarkaydet'])) {

	$ayarkaydet=$db->prepare("UPDATE ayar SET 

		ayar_recaptha=:recaptha,
		ayar_googlemap=:googlemap,
		ayar_analystic=:analystic

		WHERE ayar_id=0");
	
	$update=$ayarkaydet->execute(array(


		'recaptha'  => $_POST['ayar_recaptha'],
		'googlemap' => $_POST['ayar_googlemap'],
		'analystic' => $_POST['ayar_analystic']

	));


	if ($update) {


		header("location:../production/api-ayar.php?durum=ok");

		
	} else {

		header("location:../production/api-ayar.php?durum=no");
	}


}

?>

<?php

if (isset($_POST['sosyalayarkaydet'])) {


	$ayarkaydet=$db->prepare("UPDATE ayar SET

		ayar_facebook=:facebook,
		ayar_twitter=:twitter,
		ayar_youtube=:youtube,
		ayar_google=:google 


		WHERE ayar_id=0");

	$update=$ayarkaydet->execute(array(

		'facebook' => $_POST['ayar_facebook'],
		'twitter'  => $_POST['ayar_twitter'],
		'youtube'  => $_POST['ayar_youtube'],
		'google'   => $_POST['ayar_google']
	));


	if ($update) {
		
		header("location:../production/sosyal-ayar.php?durum=ok");
		

	} else {

		header("location:../production/sosyal-ayar.php?durum=no");

	}

	
}

?>


<?php

if (isset($_POST['mailayarkaydet'])) {


	$ayarkaydet=$db->prepare("UPDATE ayar SET

		ayar_smtphost=:smtphost,
		ayar_smtpuser=:smtpuser,
		ayar_smtppassword=:smtppassword,
		ayar_smtpport=:smtpport 


		WHERE ayar_id=0");

	$update=$ayarkaydet->execute(array(

		'smtphost' 		=> $_POST['ayar_smtphost'],
		'smtpuser'  	=> $_POST['ayar_smtpuser'],
		'smtppassword'  => $_POST['ayar_smtppassword'],
		'smtpport'   	=> $_POST['ayar_smtpport']
	));


	if ($update) {
		
		header("location:../production/mail-ayar.php?durum=ok");
		

	} else {

		header("location:../production/mail-ayar.php?durum=no");

	}

	
}

?>

<?php


if (isset($_POST['hakkimizdakaydet'])) {

	$ayarkaydet=$db->prepare("UPDATE hakkimizda SET 

		hakkimizda_baslik=:baslik,
		hakkimizda_icerik=:icerik,
		hakkimizda_video=:video,
		hakkimizda_vizyon=:vizyon,
		hakkimizda_misyon=:misyon

		WHERE hakkimizda_id=0");

	$update=$ayarkaydet->execute(array(

		'baslik'	=> $_POST['hakkimizda_baslik'],
		'icerik'	=> $_POST['hakkimizda_icerik'],
		'video'	 	=> $_POST['hakkimizda_video'],
		'vizyon' 	=> $_POST['hakkimizda_vizyon'],
		'misyon' 	=> $_POST['hakkimizda_misyon']

	));



	if ($update) {
		

		Header("location:../production/hakkimizda.php?durum=ok");
	}else  {
		
		Header("location:../production/hakkimizda.php?durum=no");
	}

}


?>

<?php


if (isset($_POST['sliderkaydet'])) {

	$uploads_dir = '../../dmg/slider';
	@$tmp_name = $_FILES['slider_resimyol']['tmp_name'];
	@$name = $_FILES['slider_resimyol']['name'];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

	$ayarkaydet=$db->prepare("INSERT INTO slider SET 

		slider_ad=:ad,
		slider_link=:link,
		slider_sira=:sira,
		slider_durum=:durum,
		slider_resimyol=:resimyol");

	$update=$ayarkaydet->execute(array(

		'ad'	 => $_POST['slider_ad'],
		'link'	 => $_POST['slider_link'],
		'sira'	 => $_POST['slider_sira'],
		'durum'  => $_POST['slider_durum'],
		'resimyol'  => $refimgyol

	));



	if ($update) {
		

		Header("location:../production/slider.php?durum=ok");
	}else  {
		
		Header("location:../production/slider.php?durum=no");
	}

}

if (@$_GET['slidersil']=='ok') {

	$sil=$db->prepare("DELETE from slider WHERE slider_id=:slider_id");
	$kontrol=$sil->execute(array(

		'slider_id' => $_GET['slider_id']
	));

	if ($kontrol) {
		

		Header("location:../production/slider.php?durum=ok");
	}else  {
		
		Header("location:../production/slider.php?durum=no");
	}
}





?>

<?php


if (isset($_POST['sliderduzenle'])) {

	
	if ($_FILES['slider_resimyol']["size"] > 0 ) {

		$uploads_dir = '../../dmg/slider';
		@$tmp_name = $_FILES['slider_resimyol']['tmp_name'];
		@$name = $_FILES['slider_resimyol']['name'];
		$benzersizsayi1=rand(20000,32000);
		$benzersizsayi2=rand(20000,32000);
		$benzersizsayi3=rand(20000,32000);
		$benzersizsayi4=rand(20000,32000);
		$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
		$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

		$duzenle=$db->prepare("UPDATE slider SET 

			slider_ad=:ad,
			slider_link=:link,
			slider_sira=:sira,
			slider_durum=:durum,
			slider_resimyol=:resimyol

			WHERE slider_id={$_POST['slider_id']}");

		$update=$duzenle->execute(array(

			'ad'		=> $_POST['slider_ad'],
			'link'	 	=> $_POST['slider_link'],
			'sira'	 	=>$_POST['slider_sira'],
			'durum' 	=> $_POST['slider_durum'],
			'resimyol'  => $refimgyol,

		));

		$slider_id=$_POST['slider_id'];

		if ($update) {
			
			$resimsilunlink=$_POST['slider_resimyol'];
			unlink("../../$resimsilunlink");

			Header("location:../production/slider-duzenle.php?slider_id=$slider_id&durum=ok");
		}else  {
			
			Header("location:../production/slider-duzenle.php?durum=no");
		}



	}else {


		$duzenle=$db->prepare("UPDATE slider SET 

			slider_ad=:ad,
			slider_link=:link,
			slider_sira=:sira,
			slider_durum=:durum

			WHERE slider_id={$_POST['slider_id']}");

		$update=$duzenle->execute(array(

			'ad'		=> $_POST['slider_ad'],
			'link'	 	=> $_POST['slider_link'],
			'sira'	 	=>$_POST['slider_sira'],
			'durum' 	=> $_POST['slider_durum']

		));

		$slider_id=$_POST['slider_id'];

		if ($update) {
			


			Header("location:../production/slider-duzenle.php?slider_id=$slider_id&durum=ok");
		}else  {
			
			Header("location:../production/slider-duzenle.php?durum=no");
		}



	}
	


}

?>

<?php




if (isset($_POST['icerikkaydet'])) {

	$uploads_dir = '../../dmg/icerik';
	@$tmp_name = $_FILES['icerik_resimyol']['tmp_name'];
	@$name = $_FILES['icerik_resimyol']['name'];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

	$ayarkaydet=$db->prepare("INSERT INTO icerik SET 

		icerik_ad=:ad,
		icerik_detay=:detay,
		icerik_keyword=:keyword,
		icerik_durum=:durum,
		icerik_resimyol=:resimyol");

	$insert=$ayarkaydet->execute(array(

		'ad'	 	=> $_POST['icerik_ad'],
		'detay'	 	=> $_POST['icerik_detay'],
		'keyword'   => $_POST['icerik_keyword'],
		'durum'  	=> $_POST['icerik_durum'],
		'resimyol'  => $refimgyol

	));



	if ($insert) {
		

		Header("location:../production/icerik.php?durum=ok");
	}else  {
		
		Header("location:../production/icerik.php?durum=no");
	}

}

if ($_GET['iceriksil']=="ok") {

	$sil=$db->prepare("DELETE from icerik WHERE icerik_id=:icerik_id");
	$iceriksilme=$sil->execute(array(
		'icerik_id' => $_GET['icerik_id']
	));

	if ($iceriksilme) {
		

		Header("location:../production/icerik.php?durum=ok");
	}else  {
		
		Header("location:../production/icerik.php?durum=no");
	}

}


if (isset($_POST['icerikduzenle'])) {

	$duzenle=$db->prepare("UPDATE icerik SET 

		'icerik_ad'		=:ad,
		'icerik_detay'	=:detay,
		'icerik_keyword'=:keyword,
		'icerik_durum'	=:durum	
		WHERE icerik_id ={$_POST['icerik_id']}");
	$update=$duzenle->execute(array(

		'ad' 		=> $_POST['icerik_ad'],
		'detay'	 	=> $_POST['icerik_detay'],
		'keyword' 	=> $_POST['icerik_keyword'],
		'durum' 	=> $_POST['icerik_durum']
	));

	$icerik_id=$_POST['icerik_id'];

	if ($update) {

		header("location:../production/icerik-duzenle.php?icerik_id=icerik_id&durum==ok");
		
	} else {

		header("location:../production/icerik-duzenle.php?durum==no");
	}
	

}


?>

<?php


if (isset($_POST['icerikduzenle'])) {

	
	if ($_FILES['icerik_resimyol']["size"] > 0 ) {

		$uploads_dir = '../../dmg/icerik';
		@$tmp_name = $_FILES['icerik_resimyol']['tmp_name'];
		@$name = $_FILES['icerik_resimyol']['name'];
		$benzersizsayi1=rand(20000,32000);
		$benzersizsayi2=rand(20000,32000);
		$benzersizsayi3=rand(20000,32000);
		$benzersizsayi4=rand(20000,32000);
		$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
		$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

		$duzenle=$db->prepare("UPDATE icerik SET 

			icerik_ad=:ad,
			icerik_detay=:detay,
			icerik_keyword=:keyword,
			icerik_durum=:durum,
			icerik_resimyol=:resimyol

			WHERE icerik_id={$_POST['icerik_id']}");

		$update=$duzenle->execute(array(

			'ad'		=> $_POST['icerik_ad'],
			'detay'	 	=> $_POST['icerik_detay'],
			'keyword'	=>$_POST['icerik_keyword'],
			'durum' 	=> $_POST['icerik_durum'],
			'resimyol'  => $refimgyol,

		));

		$icerik_id=$_POST['icerik_id'];

		if ($update) {
			
			$resimsilunlink=$_POST['icerik_resimyol'];
			unlink("../../$resimsilunlink");

			Header("location:../production/icerik-duzenle.php?icerik_id=$icerik_id&durum=ok");
		}else  {
			
			Header("location:../production/icerik-duzenle.php?durum=no");
		}



	}else {


		$duzenle=$db->prepare("UPDATE icerik SET 

			icerik_ad=:ad,
			icerik_detay=:detay,
			icerik_keyword=:keyword,
			icerik_durum=:durum

			WHERE icerik_id={$_POST['icerik_id']}");

		$update=$duzenle->execute(array(

			'ad'		=> $_POST['icerik_ad'],
			'detay'	 	=> $_POST['icerik_detay'],
			'keyword'	=>$_POST['icerik_keyword'],
			'durum' 	=> $_POST['icerik_durum']

		));

		$icerik_id=$_POST['icerik_id'];

		if ($update) {
			


			Header("location:../production/icerik-duzenle.php?icerik_id=$icerik_id&durum=ok");
		}else  {
			
			Header("location:../production/icerik-duzenle.php?durum=no");
		}



	}
	


}

?>



<?php 

if (isset($_POST['menukaydet'])) {

	

	$ayarkaydet=$db->prepare("INSERT INTO menu SET 

		menu_ust=:ust,
		menu_ad=:ad,
		menu_url=:url,
		menu_detay=:detay,
		menu_sira=:sira,
		menu_durum=:durum");

	$insert=$ayarkaydet->execute(array(

		'ust'	 	=> $_POST['menu_ust'],
		'ad'	 	=> $_POST['menu_ad'],
		'url'  	    => $_POST['menu_url'],
		'detay'  	=> $_POST['menu_detay'],
		'sira'	 	=> $_POST['menu_sira'],
		'durum'	 	=> $_POST['menu_durum']

	));



	if ($insert) {
		

		Header("location:../production/menu.php?durum=ok");
	}else  {
		
		Header("location:../production/menu.php?durum=no");
	}

}


if ($_GET['menusil']=="ok") {

	$sil=$db->prepare("DELETE from menu WHERE menu_id=:menu_id");
	$menusilme=$sil->execute(array(
		'menu_id' => $_GET['menu_id']
	));

	if ($menusilme) {
		

		Header("location:../production/menu.php?durum=ok");
	}else  {
		
		Header("location:../production/menu.php?durum=no");
	}

}



?>

<?php 


if (isset($_POST['menuduzenle'])) {


	$duzenle=$db->prepare("UPDATE menu SET
		menu_ust=:ust, 
		menu_ad=:ad,
		menu_url=:url,
		menu_detay=:detay,
		menu_sira=:sira,
		menu_durum=:durum
		WHERE menu_id={$_POST['menu_id']}");

	$update=$duzenle->execute(array(
		'ust' => $_POST['menu_ust'],
		'ad' => $_POST['menu_ad'],
		'url' => $_POST['menu_url'],
		'detay' => $_POST['menu_detay'],
		'sira' => $_POST['menu_sira'],
		'durum' => $_POST['menu_durum']
	));

	$menu_id=$_POST['menu_id'];

	if ($update) {


		Header ("location:../production/menu-duzenle.php?menu_id=$menu_id&durum=ok");
	} else {

		Header ("location:../production/menu-duzenle.php?durum=no");

	}

}﻿


?>

<?php
if (isset($_POST['logoduzenle'])) {

	$uploads_dir = '../../dmg';
	@$tmp_name = $_FILES['ayar_logo']['tmp_name'];
	@$name = $_FILES['ayar_logo']['name'];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

	$duzenle=$db->prepare("UPDATE ayar SET 

		ayar_logo=:logo


		WHERE ayar_id=0");

	$update=$duzenle->execute(array(


		'logo'  => $refimgyol

	));



	if ($update) {

		$resimsilunlink=$_POST['eski_yol'];
		unlink("../../$resimsilunlink");

		Header("location:../production/genel-ayar.php?durum=ok");
	}else  {

		Header("location:../production/slider-duzenle.php?durum=no");
	}



}






?>

<?php
if (isset($_POST['kresimduzenle'])) {

	
	

	$uploads_dir = '../../dmg/kullanici';
	@$tmp_name = $_FILES['kullanici_resim']['tmp_name'];
	@$name = $_FILES['kullanici_resim']['name'];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

	$duzenle=$db->prepare("UPDATE kullanici SET 

		kullanici_resim=:resim


		WHERE kullanici_id={$_POST['kullanici_id']}");

	$update=$duzenle->execute(array(


		'resim'  => $refimgyol

	));

	$slider_id=$_POST['slider_id'];

	if ($update) {

		$resimsilunlink=$_POST['eski_yol'];
		unlink("../../$resimsilunlink");

		Header("location:../production/kullanici-profil.php?durum=ok");
	}else  {

		Header("location:../production/kullanici-profil.php?durum=no");
	}



}



if (isset($_POST['kprofilguncelle'])) {

	$ayarkaydet=$db->prepare("UPDATE kullanici SET 

		kullanici_adsoyad=:adsoyad,
		kullanici_password=:pass
		

		WHERE kullanici_id={$_POST['kullanici_id']}");

	$update=$ayarkaydet->execute(array(

		
		'adsoyad' 		 => $_POST['kullanici_adsoyad'],
		'pass' 		 	 => md5($_POST['kullanici_password'])

	));



	if ($update) {
		

		Header("location:../production/kullanici-profil.php?durum=ok");
	}else  {
		
		Header("location:../production/kullanici-profil.php?durum=no");
	}

}



?>
<?php 
if (isset($_POST['dokumankaydet'])) {
	
	$uploads_dir = '../../dmg/dokuman';
	@$tmp_name = $_FILES['dokuman_yol']['tmp_name'];
	@$name = $_FILES['dokuman_yol']['name'];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

	$ayarkaydet=$db->prepare("INSERT INTO dokuman SET 

		dokuman_ad=:ad,
		dokuman_yol=:yol

		");

	$update=$ayarkaydet->execute(array(

		'ad'	 => $_POST['dokuman_ad'],
		'yol'  => $refimgyol

	));

	if ($update) {
		

		Header("location:../production/dokuman.php?durum=ok");
	}else  {
		
		Header("location:../production/dokuman.php?durum=no");
	}

}


if ($_GET['dokumansil']=="ok") {

	$sil=$db->prepare("DELETE from dokuman WHERE dokuman_id=:dokuman_id");
	$dokumansil=$sil->execute(array(
		'dokuman_id' => $_GET['dokuman_id']
	));

	if ($dokumansil) {
		
		Header("location:../production/dokuman.php?durum=ok");
	}else  {
		
		Header("location:../production/dokuman.php?durum=no");
	}

}


?>

<?php 
if (isset($_POST['kullaniciekle'])) {

	$uploads_dir = '../../dmg/kullanici';
	@$tmp_name = $_FILES['kullanici_resim']['tmp_name'];
	@$name = $_FILES['kullanici_resim']['name'];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

	$ayarkaydet=$db->prepare("INSERT INTO kullanici SET 

		kullanici_ad=:ad,
		kullanici_password=:password,
		kullanici_adsoyad=:adsoyad,
		durum=:dur,
		yetki=:yet,
		kullanici_resim=:resim");

	$update=$ayarkaydet->execute(array(

		'ad'	 	 => $_POST['kullanici_ad'],
		'password'	 => md5($_POST['kullanici_password']),
		'adsoyad'	 => $_POST['kullanici_adsoyad'],
		'dur'	     => $_POST['durum'],
		'yet' 		 => $_POST['yetki'],
		'resim' 	 => $refimgyol

	));



	if ($update) {
		

		Header("location:../production/kullanici.php?durum=ok");
	}else  {
		
		Header("location:../production/kullanici.php?durum=no");
	}

}

if ($_GET['kullanicisil']=="ok") {

	$sil=$db->prepare("DELETE from kullanici WHERE kullanici_id=:kullanici_id");
	$kullanicisilme=$sil->execute(array(
		'kullanici_id' => $_GET['kullanici_id']
	));

	if ($kullanicisilme) {
		
		Header("location:../production/kullanici.php?durum=ok");
	}else  {
		
		Header("location:../production/kullanici.php?durum=no");
	}

}

if (isset($_POST['kprofil'])) {

	$ayarkaydet=$db->prepare("UPDATE kullanici SET 

		kullanici_adsoyad=:adsoyad,
		kullanici_ad=:ad,
		yetki=:yet,
		kullanici_password=:pass
		

		WHERE kullanici_id={$_POST['kullanici_id']}");

	$update=$ayarkaydet->execute(array(

		
		'adsoyad' 		 => trim($_POST['kullanici_adsoyad']),
		'ad'			 => $_POST['kullanici_ad'],
		'yet'			 => $_POST['yetki'],
		'pass' 		 	 => md5($_POST['kullanici_password'])

	));



	if ($update) {
		

		Header("location:../production/kullanici.php?durum=ok");
	}else  {
		
		Header("location:../production/kullanici.php?durum=no");
	}

}


?>

<?php 
if (isset($_POST['ticketkaydet'])) {

	

	$ayarkaydet=$db->prepare("INSERT INTO ticket SET 

		ticket_baslik=:baslik,
		ticket_aciklama=:aciklama,
		ticket_kullanici=:kullanici,
		ticket_durum=:durum
		");

	$insert=$ayarkaydet->execute(array(

		'baslik'	 	=> $_POST['ticket_baslik'],
		'aciklama'	 	=> $_POST['ticket_aciklama'],
		'kullanici'     => $_POST['ticket_kullanici'],
		'durum'  		=> $_POST['ticket_durum']

	));



	if ($insert) {
		

		Header("location:../production/ticket.php?durum=ok");
	}else  {
		
		Header("location:../production/ticket.php?durum=no");
	}

}

if (isset($_POST['ticketduzenle'])) {

		
		$duzenle=$db->prepare("UPDATE ticket SET 

			ticket_baslik=:baslik,
			ticket_aciklama=:aciklama,
			ticket_kullanici=:kullanici,
			ticket_yuzde=:yuzde,
			ticket_durum=:durum

			WHERE ticket_id={$_POST['ticket_id']}");

		$update=$duzenle->execute(array(

			'baslik'	 	=> $_POST['ticket_baslik'],
			'aciklama'	 	=> $_POST['ticket_aciklama'],
			'kullanici'     => $_POST['ticket_kullanici'],
			'yuzde'         => $_POST['ticket_yuzde'],
			'durum'  		=> $_POST['ticket_durum']


		));

		$ticket_id=$_POST['ticket_id'];

		if ($update) {
			

			Header("location:../production/ticket-duzenle.php?ticket_id=$ticket_id&durum=ok");
		}else  {
			
			Header("location:../production/ticket-duzenle.php?durum=no");
		}



	}

if ($_GET['ticketsil']=="ok") {

	$sil=$db->prepare("DELETE from ticket WHERE ticket_id=:ticket_id");
	$ticketsilme=$sil->execute(array(
		'ticket_id' => $_GET['ticket_id']
	));

	if ($ticketsilme) {
		
		Header("location:../production/ticket.php?durum=ok");
	}else  {
		
		Header("location:../production/ticket.php?durum=no");
	}

}



?>