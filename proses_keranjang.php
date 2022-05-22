<?php
 include 'connect.php';

 $id = $_REQUEST['no_inventaris'];
 $data = mysqli_query($connection,"SELECT no_inventaris,kode_barcode,nama_barang,merk
       FROM tb_data WHERE no_inventaris='$id'");
 $d = mysqli_fetch_array($data);
 $kode = $d['kode_barcode'];
 $no = $d['no_inventaris'];
 $nama_barang = $d['nama_barang'];
 $merk = $d['merk'];


 $sql = mysqli_query($connection, "INSERT INTO tb_keranjang ( kode_barcode, no_inventaris, nama_barang, merk)
 VALUES('$kode','$no', '$nama_barang', '$merk' )");
 // $result = mysqli_query($sql, $query, $connection);
 $site_url = $base_url.'keranjang.php';
 if ($sql == 1) {
   // echo"Input Berhasil";
   echo "<script type='text/javascript'>window.top.location='".$site_url."';</script>";
 } else {
     // kalau gagal tampilkan pesan
     die("Gagal menyimpan perubahan...");
 }

?>
