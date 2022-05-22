<?php
include 'connect.php';
    // ambil data dari formulir
    if (!isset($_POST['Simpan'])) {
     $id_ruang = $_POST['id_ruang'];
     $lantai = $_POST['lantai'];
     $nama_ruang = $_POST['nama_ruang'];
     $deskripsi = $_POST['deskripsi'];

     $sql = mysqli_query($connection, "UPDATE tb_lokasi SET id_ruang='$id_ruang', lantai='$lantai', nama_ruang='$nama_ruang',  deskripsi='$deskripsi'
       WHERE id_ruang='$id_ruang'");
?>
<?php
    // apakah query update berhasil?
    if( $sql ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        ?>
          <script language="javascript">
            alert("Data berhasil Diubah!");
            document.location="lokasi.php";
          </script>
        <?php
    } else {
        // kalau gagal tampilkan pesan
        ?>
          <script language="javascript">
            alert("Data Gagal Diubah!");
            document.location="edit_lokasi.php";
          </script>
        <?php
    }
} else {
    die("Akses dilarang...");
}
?>
