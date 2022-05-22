<?php
include 'connect.php';
    // ambil data dari formulir
    if (!isset($_POST['Simpan'])) {
     $id = $_POST['id'];
     $nama = $_POST['nama'];
     $username = $_POST['username'];
     $password = $_POST['password'];
     $level = $_POST['level'];

     $sql = mysqli_query($connection, "UPDATE tb_user SET id='$id', nama='$nama', username='$username', password='$password',
     level='$level' WHERE id='$id'");
?>
<?php
    // apakah query update berhasil?
    if( $sql ) {
      ?>
        <script language="javascript">
          alert("Pengguna berhasil Diubah!");
          document.location="list_user.php";
        </script>
      <?php
    } else {
      ?>
        <script language="javascript">
          alert("Pengguna Gagal Diubah!");
          document.location="edit_user.php";
        </script>
      <?php
    }
} else {
    die("Akses dilarang...");
}
?>
