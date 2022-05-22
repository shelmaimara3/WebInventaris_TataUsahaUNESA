<?php
include 'connect.php';
$id_ruang = $_GET['id_ruang'];
mysqli_query($connection,"DELETE FROM tb_lokasi WHERE id_ruang='$id_ruang'");
?>
  <script language="javascript">
    alert("Data berhasil Dihapus!");
    document.location="lokasi.php";
  </script>
<?php

?>
