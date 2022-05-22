<?php
include 'connect.php';
$kode_barcode = $_GET['kode_barcode'];
$sql = mysqli_query($connection, "SELECT * FROM tb_data WHERE kode_barcode='$kode_barcode'");
$brg = mysqli_fetch_array($sql);
$data = array(
	'nama_barang' => $brg ['nama_barang'],
	'nama_ruang' => $brg['nama_ruang']
);
echo json_encode($data);
 ?>
