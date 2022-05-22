<?php
$base_url  = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
$base_url .= "://".$_SERVER['HTTP_HOST'];
$base_url .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
$connection = mysqli_connect("localhost","root","","inventaris");
if(!$connection){
  die("Koneksi Gagal: ". mysqli_connect_error());
  exit();
}
?>
