<?php
 include "../connect.php";

 $id = $_REQUEST['id'];
 $data = mysqli_query($connection,"SELECT id,kode_barcode,nama_barang,nama_peminjam,asal_peminjam,no_telp,tgl_pinjam,tgl_kembali,pengentri
       FROM tb_pinjam WHERE id='$id'");
 $d = mysqli_fetch_array($data);
 $kode = $d['kode_barcode'];
 $nama_barang = $d['nama_barang'];
 $nama_peminjam = $d['nama_peminjam'];
 $asal_peminjam = $d['asal_peminjam'];
 $no_telp = $d['no_telp'];
 $tgl_pinjam = $d['tgl_pinjam'];
 $tgl_kembali = $d['tgl_kembali'];
 $pengentri = $d['pengentri'];

 $sql = mysqli_query($connection, "INSERT INTO history_pinjam ( id, kode_barcode, nama_barang, nama_peminjam, asal_peminjam, no_telp, tgl_pinjam, tgl_kembali , pengentri)
 VALUES('$id', '$kode', '$nama_barang', '$nama_peminjam', '$asal_peminjam', '$no_telp', '$tgl_pinjam', '$tgl_kembali', '$pengentri' )");
 $query = mysqli_query($connection, "DELETE FROM tb_pinjam WHERE id='$id'");
 // $result = mysqli_query($sql, $query, $connection);
 $site_url = $base_url.'tbl_pinjam.php';
 if ($sql == 1 && $query == 1) {
   // echo"Input Berhasil";
   echo "<script type='text/javascript'>window.top.location='".$site_url."';</script>";
 } else {
     // kalau gagal tampilkan pesan
     die("Gagal menyimpan perubahan...");
 }

?>
