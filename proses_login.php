<?php
include 'connect.php';
session_start();

  $username = $_REQUEST['username'];
  $password = $_REQUEST['password'];

  $sql = mysqli_query($connection, "SELECT id, username, nama, level FROM tb_user WHERE username ='$username' AND password='$password'");

  if( $sql ){
    list($id, $username, $nama, $level) = mysqli_fetch_array($sql);

    $_SESSION['username'] = $username;
    $_SESSION['nama'] = $nama;
    $_SESSION['level'] = $level;
  }

if(mysqli_num_rows($sql) == 0){
  ?>
    <script language="javascript">
      alert("Data tidak ada!");
      document.location="login.php";
    </script>
  <?php
}else{
if($_SESSION['level'] == 'admin'){
  ?>
    <script language="javascript">
      // alert("Anda berhasil Login Admin!");
      document.location="index.php";
    </script>
  <?php
}else{
  if ($_SESSION['level'] == 'operator') {
  ?>
    <script language="javascript">
      // alert("Anda berhasil Login Operator!");
      document.location="operator/index.php";
    </script>
  <?php
}else {
  if ($_SESSION['level'] == 'teknisi') {
    ?>
    <script language="javascript">
      // alert("Anda berhasil Login Operator!");
      document.location="Teknisi/index.php";
    </script>
    <?php
  }
}
}
}
?>
<?php
