<?php
 include "../connect.php";
 // cek apakah tombol daftar sudah diklik atau blum?
// if(isset($_POST['simpan'])){
     $id = $_POST['id'];
      $kode = $_POST['kode_barcode'];
     $nama_barang = $_POST['nama_barang'];
     $nama_peminjam = $_POST['nama_peminjam'];
     $asal_peminjam = $_POST['asal_peminjam'];
     $no_telp = $_POST['no_telp'];
     $tgl_pinjam = $_POST['tgl_pinjam'];
     $tgl_kembali = $_POST['tgl_kembali'];
     $pengentri = $_POST['pengentri'];

     $cek_kode = mysqli_num_rows(mysqli_query($connection, "SELECT * FROM tb_pinjam WHERE kode_barcode = '$kode'"));
     if ($cek_kode > 0) {
       ?>
         <script language="javascript">
           alert("Maaf Barang Sedang Dipinjam ");
           document.location="form_pinjam.php";
         </script>
       <?php
     }else {
       $mysqli = mysqli_query($connection,"INSERT INTO tb_pinjam ( id, kode_barcode, nama_barang, nama_peminjam, asal_peminjam, no_telp, tgl_pinjam, tgl_kembali, pengentri)
       VALUES('$id', '$kode', '$nama_barang', '$nama_peminjam', '$asal_peminjam', '$no_telp', '$tgl_pinjam', '$tgl_kembali', '$pengentri')");
       if ($mysqli) {
         ?>
           <script language="javascript">
             alert("Data Disimpan");
             document.location="tbl_pinjam.php";
           </script>
         <?php
       }else{
         ?>
           <script language="javascript">
             alert("Data Gagal Disimpan! ");
             document.location="form_pinjam.php";
           </script>
         <?php
       }
     }

 mysqli_close($connection);
 ?>
