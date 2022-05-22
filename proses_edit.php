<?php
include 'connect.php';

    // ambil data dari formulir
    if (!isset($_POST['Simpan'])) {
     $no = $_POST['no_inventaris'];
     $kode = $_POST['kode_barcode'];
     $nama_barang = $_POST['nama_barang'];
     $merk = $_POST['merk'];
     $pengguna = $_POST['pengguna'];
     $processor = $_POST['processor'];
     $ram = $_POST['ram'];
     $hardisk = $_POST['hardisk'];
     $monitor = $_POST['monitor_inc'];
     $sistem = $_POST['sistem_operasi'];
     $anti_virus = $_POST['anti_virus'];
     $ruang = $_POST['nama_ruang'];
     $kondisi = $_POST['kondisi'];
     $pengentri = $_POST['pengentri'];

     $sql = mysqli_query($connection, "UPDATE tb_data SET no_inventaris='$no', kode_barcode='$kode', nama_barang='$nama_barang',
       merk='$merk', pengguna='$pengguna', processor='$processor', ram='$ram', hardisk='$hardisk', monitor_inc='$monitor', sistem_operasi='$sistem', anti_virus='$anti_virus', 
       nama_ruang='$ruang', kondisi='$kondisi', pengentri='$pengentri' WHERE no_inventaris='$no'");
?>

<?php
// apakah query simpan berhasil?
if( $sql ) {
   // kalau berhasil alihkan ke halaman index.php dengan status=sukses
   ?>
     <script language="javascript">
       alert("Data berhasil Diubah!");
       document.location="tbl_inventaris.php";
     </script>
   <?php
} else {
   // kalau gagal alihkan ke halaman indek.php dengan status=gagal
   ?>
     <script language="javascript">
       alert("Data Gagal Diubah!");
       document.location="edit.php";
     </script>
   <?php
}
} else {
  echo "Akses Dilarang";
}

mysqli_close($connection);
?>
