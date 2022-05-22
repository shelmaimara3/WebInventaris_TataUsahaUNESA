<?php
include 'connect.php';
$id = $_GET['id'];
mysqli_query($connection,"DELETE FROM tb_user WHERE id='$id'");
?>
  <script language="javascript">
    alert("Pengguna Dihapus!");
    document.location="list_user.php";
  </script>
<?php 
 ?>
