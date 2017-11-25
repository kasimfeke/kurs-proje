<?php 
ob_start();
session_start();
include 'connect.php';

if(isset($_POST['ayarkaydet']))
{
	$id=0;

	$ayarkaydet=mysql_query("UPDATE ayarlar SET ayar_title='".$_POST['ayar_title']."',ayar_description='".$_POST['ayar_description']."',ayar_telefon='".$_POST['ayar_telefon']."',ayar_footer='".$_POST['ayar_footer']."',ayar_adres='".$_POST['ayar_adres']."',ayar_mail='".$_POST['ayar_mail']."' WHERE ayar_id='$id'");

	if (mysql_affected_rows())
	{
		header("Location:../ayarlar.php?durum=ok");
	}


	else
	{
		header("Location:../ayarlar.php?durum=no");
	}

}


if (isset($_POST['login'])) {
	

	$admin_kadi=$_POST['admin_kadi'];
	$admin_parola=md5($_POST['admin_parola']);

	if ($admin_kadi && $admin_parola) {

		$sorgula=mysql_query("select * from admin where admin_kadi='$admin_kadi' and admin_parola='$admin_parola'");

		$verisay=mysql_num_rows($sorgula);

		if ($verisay>0) {
			$_SESSION['admin_kadi'] = $admin_kadi;

			header('Location:../index.php');
		}
		else {
			header('Location:../login.php?login=no');
		}
	}

}



if (isset($_POST['menukaydet'])) {
	$menuekle=mysql_query("insert into menuler (menu_ad, menu_url, menu_sira) VALUES ('".$_POST['menu_ad']."','".$_POST['menu_url']."','".$_POST['menu_sira']."')");

	if (mysql_affected_rows()) 
	{
		header("Location:../menu-ekle.php?durum=ok");
	}

	else
	{
		header("Location:../menu-ekle.php?durum=no");
	}
}



if(isset($_POST['menuduzenle']))
{

	$menu_id=$_POST['menu_id'];

	$menuduzenle=mysql_query("UPDATE menuler SET menu_ad='".$_POST['menu_ad']."',menu_url='".$_POST['menu_url']."',menu_sira='".$_POST['menu_sira']."' WHERE menu_id='$menu_id'");

	if (mysql_affected_rows())
	{
		header("Location:../menu-duzenle.php?durum=ok&menu_id=$menu_id");
	}


	else
	{
		header("Location:../menu-duzenle.php?durum=no&menu_id=$menu_id");
	}

}



if ($_GET['menusil']=="ok") {
	$menusil=mysql_query("delete from menuler where menu_id='".$_GET['menu_id']."'");

	if (mysql_affected_rows()) {
		header('Location:../menuler.php?durum=ok');
	}

	else {
		header('Location:../menuler.php?durum=no');
	}
}


if (isset($_POST['sliderkaydet'])) {

	$uploads_dir = '../../uploads/';
	@$tmp_name = $_FILES['slidegorsel']["tmp_name"];
	@$name = $_FILES['slidegorsel']["name"];

	$benzersizsayi1=rand(20000,30000);
	$benzersizsayi2=rand(20000,30000);
	$benzersizsayi3=rand(20000,30000);
	$benzersizsayi4=rand(20000,30000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 3)."".$benzersizad.$name;

	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

	$sliderekle=mysql_query("insert into slider (slider_resim_yol,slider_url,slider_sira,slider_ad)
		VALUES ('".$refimgyol."','".$_POST['slider_url']."','".$_POST['slider_sira']."','".$_POST['slider_ad']."')");

	if (mysql_affected_rows()) {
		header("Location:../slider-ekle.php?durum=ok");
	}
	else{header("Location:../slider-ekle.php?durum=no");}

}

if ($_GET['slidersil']=="ok") {
	$slidersil=mysql_query("delete from slider where slider_id='".$_GET['slider_id']."'");
	if (mysql_affected_rows()) {
		header('Location:../slider.php?durum=ok');
	}
	else {
		header('Location:../slider.php?durum=no');
	}
}

if(isset($_POST['hizmetkaydet']))
{
	$idd=0;
	$hizmetkaydet=mysql_query("UPDATE hizmetler SET hizmetler_baslik='".$_POST['hizmetler_baslik']."',hizmetler_yazi='".$_POST['hizmetler_yazi']."' WHERE hizmetler_id='$idd'");

	if (mysql_affected_rows())
	{
		header("Location:../hizmetler.php?durum=ok");
	}


	else
	{
		header("Location:../hizmetler.php?durum=no");
	}

}

if(isset($_POST['hakkimizdakaydet']))
{
	$iddd=0;
	$hakkimizdakaydet=mysql_query("UPDATE hakkimizda SET hakkimizda_baslik='".$_POST['hakkimizda_baslik']."',hakkimizda_yazi='".$_POST['hakkimizda_yazi']."' WHERE hakkimizda_id='$iddd'");

	if (mysql_affected_rows())
	{
		header("Location:../hakkimizda.php?durum=ok");
	}

	else
	{
		header("Location:../hakkimizda.php?durum=no");
	}

}

if (isset($_POST['sayfakaydet'])) {
	$zaman=date('Y-m-d H:i');
	$sayfakaydet=mysql_query("insert into sayfalar (sayfa_ad, sayfa_yazi, sayfa_sira, sayfa_anasayfa, sayfa_tarih) VALUES ('".$_POST['sayfa_ad']."','".$_POST['sayfa_yazi']."','".$_POST['sayfa_sira']."','".$_POST['sayfa_anasayfa']."','".$zaman."')");

	if (mysql_affected_rows()) 
	{
		header("Location:../sayfalar.php?durum=ok");
	}

	else
	{
		header("Location:../sayfalar.php?durum=no");
	}
}

if ($_GET['sayfasil']=="ok") {
	$sayfasil=mysql_query("delete from sayfalar where sayfa_id='".$_GET['sayfa_id']."'");

	if (mysql_affected_rows()) {
		header('Location:../sayfalar.php?durum=ok');
	}

	else {
		header('Location:../sayfalar.php?durum=no');
	}
}

if(isset($_POST['sayfaduzenle']))
{

	$sayfa_id=$_POST['sayfa_id'];

	$sayfaduzenle=mysql_query("UPDATE sayfalar SET sayfa_ad='".$_POST['sayfa_ad']."',sayfa_yazi='".$_POST['sayfa_yazi']."',sayfa_sira='".$_POST['sayfa_sira']."',sayfa_anasayfa='".$_POST['sayfa_anasayfa']."' WHERE sayfa_id='$sayfa_id'");

	if (mysql_affected_rows())
	{
		header("Location:../sayfa-duzenle.php?durum=ok&sayfa_id=$sayfa_id");
	}


	else
	{
		header("Location:../sayfa-duzenle.php?durum=no&sayfa_id=$sayfa_id");
	}

}

?>