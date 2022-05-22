<?php
include 'connect.php';
    // ambil data dari formulir
    if (!isset($_POST['Simpan'])) {
     $id_perbaikan = $_POST['id_perbaikan'];
      $kode = $_POST['kode_barcode'];
     $nama_barang = $_POST['nama_barang'];
     $lokasi = $_POST['lokasi'];
     $masalah = $_POST['masalah'];
     $solusi = $_POST['solusi'];
     $tgl_catat = $_POST['tgl_catat'];
     $lama_perbaikan = $_POST['lama_perbaikan'];
     $biaya = $_POST['biaya'];
     $pengentri = $_POST['pengentri'];

     $sql = mysqli_query($connection, "UPDATE tb_perbaikan SET id_perbaikan='$id_perbaikan',kode_barcode='$kode',
        nama_barang='$nama_barang', lokasi='$lokasi', masalah='$masalah', solusi='$solusi', tgl_catat='$tgl_catat', lama_perbaikan='$lama_perbaikan',
    biaya='$biaya', pengentri='$pengentri' WHERE id_perbaikan='$id_perbaikan'");
?>
<?php
    // apakah query update berhasil?
    if( $sql ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        ?>
          <script language="javascript">
            alert("Data Berhasil Diubah!");
            document.location="tbl_perbaikan.php";
          </script>
        <?php
    } else {
        // kalau gagal tampilkan pesan
        ?>
          <script language="javascript">
            alert("Data Gagal Diubah!");
            document.location="edit_perbaikan.php";
          </script>
        <?php
    }
} else {
    die("Akses dilarang...");
}
?>
