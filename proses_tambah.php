<?php
 include 'connect.php';
 // cek apakah tombol daftar sudah diklik atau blum?
// if(isset($_POST['simpan'])){
     $no_inventaris = $_POST['no_inventaris'];
     $kode_barcode = $_POST['kode_barcode'];
     $nama_barang = $_POST['nama_barang'];
     $merk = $_POST['merk'];
     $pengguna = $_POST['pengguna'];
     $processor = $_POST['processor'];
     $ram = $_POST['ram'];
     $hardisk = $_POST['hardisk'];
     $monitor_inc = $_POST['monitor_inc'];
     $sistem_operasi = $_POST['sistem_operasi'];
     $anti_virus = $_POST['anti_virus'];
     $nama_ruang = $_POST['nama_ruang'];
     $kondisi = $_POST['kondisi'];
     $pengentri = $_POST['pengentri'];

     // buat query
    $mysqli = mysqli_query($connection,"INSERT INTO tb_data ( no_inventaris, kode_barcode, nama_barang, merk, pengguna, processor,
      ram, hardisk, monitor_inc, sistem_operasi, anti_virus, nama_ruang, kondisi, pengentri)
    VALUES('$no_inventaris', '$kode_barcode', '$nama_barang', '$merk', '$pengguna', '$processor', '$ram', '$hardisk', '$monitor_inc',
      '$sistem_operasi', '$anti_virus', '$nama_ruang', '$kondisi', '$pengentri')");

     // apakah query simpan berhasil?
    if( $mysqli ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        ?>
          <script language="javascript">
            alert("Data berhasil Ditambah!");
            document.location="tbl_inventaris.php";
          </script>
        <?php

    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        ?>
          <script language="javascript">
            alert("Data Gagal Ditambah!");
            document.location="form_inventaris.php";
          </script>
        <?php
    }
 // }

 mysqli_close($connection);
 ?>
