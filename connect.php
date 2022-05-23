<?php
$base_url  = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
$base_url .= "://".$_SERVER['HTTP_HOST'];
$base_url .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
$connection = mysqli_connect("sql104.byethost7.com","b7_31783816","qwerty567","b7_31783816_inventaris");
if(!$connection){
  die("Koneksi Gagal: ". mysqli_connect_error());
  exit();
}
?>
