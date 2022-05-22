<?php
include 'connect.php';
$kode = $_GET['kode_barcode'];
mysqli_query($connection,"DELETE FROM tb_keranjang WHERE kode_barcode='$kode'");
?>
  <script language="javascript">
    alert("Data berhasil Dihapus!");
    document.location="keranjang.php";
  </script>
<?php
?>
