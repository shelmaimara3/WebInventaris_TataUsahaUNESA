<?php
include 'connect.php';
$no_inventaris = $_GET['no_inventaris'];
mysqli_query($connection,"DELETE FROM tb_data WHERE no_inventaris='$no_inventaris'");
?>
  <script language="javascript">
    alert("Data berhasil Dihapus!");
    document.location="tbl_inventaris.php";
  </script>
<?php

?>
