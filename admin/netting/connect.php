<?php

if (!@$baglanti=mysql_connect("localhost","username","password")){
    die("Mysql ile bağlantı kurulamadı!".mysql_error());
}
 

if (!@mysql_select_db("voguish",$baglanti)){
    die("Veritabanı ile bağlantı kurulamadı!".mysql_error());
}
 
mysql_query("SET NAMES UTF8");
?>﻿