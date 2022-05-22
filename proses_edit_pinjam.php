<?php
include 'connect.php';
    // ambil data dari formulir
    if (!isset($_POST['Simpan'])) {
     $id = $_POST['id'];
     $kode = $_POST['kode_barcode'];
     $nama_barang = $_POST['nama_barang'];
     $nama_peminjam = $_POST['nama_peminjam'];
     $asal_peminjam = $_POST['asal_peminjam'];
     $no_telp = $_POST['no_telp'];
     $tgl_pinjam = $_POST['tgl_pinjam'];
     $tgl_kembali = $_POST['tgl_kembali'];
     $pengentri = $_POST['pengentri'];

     $sql = mysqli_query($connection, "UPDATE tb_pinjam SET id='$id', kode_barcode='$kode', nama_barang='$nama_barang',
  nama_peminjam='$nama_peminjam', asal_peminjam='$asal_peminjam', no_telp='$no_telp', tgl_pinjam='$tgl_pinjam',
  tgl_kembali='$tgl_kembali', pengentri='$pengentri' WHERE id='$id'");

?>
<?php
    // apakah query update berhasil?
    if( $sql ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        ?>
          <script language="javascript">
            alert("Data Berhasil Diubah! ");
            document.location="tbl_pinjam.php";
          </script>
        <?php
    } else {
        // kalau gagal tampilkan pesan
        ?>
          <script language="javascript">
            alert("Data Gagal Diubah! ");
            document.location="edit_pinjam.php";
          </script>
        <?php
}    } else {
    die("Akses dilarang...");
}
?>
