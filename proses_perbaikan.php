<?php
 include 'connect.php';
 // cek apakah tombol daftar sudah diklik atau blum?
// if(isset($_POST['simpan'])){
     // ambil data dari formulir

     $id_perbaikan = $_POST['id_perbaikan'];
     $kode = $_POST['kode_barcode'];
     $nama_barang = $_POST['nama_barang'];
     $lokasi = $_POST['nama_ruang'];
     $masalah = $_POST['masalah'];
     $solusi = $_POST['solusi'];
     $tgl_catat = $_POST['tgl_catat'];
     $lama_perbaikan = $_POST['lama_perbaikan'];
     $biaya = $_POST['biaya'];
     $pengentri = $_POST['pengentri'];


     $cek_kode = mysqli_num_rows(mysqli_query($connection, "SELECT * FROM tb_perbaikan WHERE kode_barcode = '$kode'"));
     if ($cek_kode > 0) {
       ?>
         <script language="javascript">
           alert("Barang Sedang Diperbaiki !!");
           document.location="form_perbaikan.php";
         </script>
       <?php
     }else {
       $mysqli = mysqli_query($connection,"INSERT INTO tb_perbaikan ( id_perbaikan, kode_barcode, nama_barang, lokasi,
          masalah, solusi, tgl_catat, lama_perbaikan, biaya, pengentri)
       VALUES('$id_perbaikan', '$kode', '$nama_barang', '$lokasi', '$masalah', '$solusi', '$tgl_catat',
         '$lama_perbaikan', '$biaya', '$pengentri')");
       if ($mysqli) {
         ?>
           <script language="javascript">
             alert("Data Disimpan! ");
             document.location="tbl_perbaikan.php";
           </script>
         <?php
       }else{
         ?>
           <script language="javascript">
             alert("Data Gagal Disimpan! ");
             document.location="form_perbaikan.php";
           </script>
         <?php

       }
     }

   mysqli_close($connection);
 ?>
