<?php
 include 'connect.php';

 $id = $_REQUEST['id_perbaikan'];
 $data = mysqli_query($connection,"SELECT id_perbaikan,kode_barcode,nama_barang,lokasi,masalah,solusi,
   tgl_catat,lama_perbaikan,biaya,pengentri FROM tb_perbaikan WHERE id_perbaikan='$id'");
 $d = mysqli_fetch_array($data);
 $kode = $d['kode_barcode'];
 $nama_barang = $d['nama_barang'];
 $lokasi = $d['lokasi'];
 $masalah = $d['masalah'];
 $solusi = $d['solusi'];
 $tgl_catat = $d['tgl_catat'];
 $lama_perbaikan = $d['lama_perbaikan'];
 $biaya = $d['biaya'];
 $pengentri = $d['pengentri'];

 $sql = mysqli_query($connection, "INSERT INTO tb_history ( id_perbaikan,kode_barcode,nama_barang,lokasi,masalah,solusi,tgl_catat,lama_perbaikan,biaya,pengentri)
 VALUES('$id','$kode','$nama_barang','$lokasi', '$masalah', '$solusi', '$tgl_catat','$lama_perbaikan','$biaya','$pengentri' )");
 $query = mysqli_query($connection, "DELETE FROM tb_perbaikan WHERE id_perbaikan='$id'");
 // $result = mysqli_query($sql, $query, $connection);
 $site_url = $base_url.'history.php';
 if ($sql == 1 && $query == 1) {
   // echo"Input Berhasil";
   echo "<script type='text/javascript'>window.top.location='".$site_url."';</script>";
 } else {
     // kalau gagal tampilkan pesan
     die("Gagal menyimpan perubahan...");
 }
?>
