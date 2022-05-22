<?php
include 'connect.php';
session_start();
if (!$_SESSION) {
	header('Location: login.php');
}
?>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Inventaris Tata Usaha UNESA</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.php" class="logo"><b>Inventaris<span> TU UNESA</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="logout.php">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p><h3 class="centered"><font style=" MV Boli" color="#42f4eb">Welcome</font></h3></p>
          <h5 class="centered"><?php echo $_SESSION['nama']; ?></h5>
          <li class="mt">
            <a class="active" href="index.php">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
         <li class="sub-menu">
       <a href="javascript:;">
         <i class="fa fa-desktop"></i>
         <span> Master Data </span>
         </a>
       <ul class="sub">
         <li><a href="tbl_inventaris.php"> Inventaris</a></li>
         <li><a href="list_user.php">Daftar Pengguna</a></li>
				 <li><a href="lokasi.php">Daftar Lokasi </a></li>
       </ul>
     </li>
     <li class="sub-menu">
       <a href="javascript:;">
         <i class="fa fa-cogs"></i>
         <span> Transaksi </span>
         </a>
       <ul class="sub">
				 <li><a href="tbl_pinjam.php">Data Peminjaman</a></li>
				 <li><a href="history.php">Data Perbaikan</a></li>
       </ul>
     </li>
     <li class="sub-menu">
       <a href="javascript:;">
         <i class="fa fa-book"></i>
         <span> Laporan </span>
         </a>
       <ul class="sub">
         <li><a href="history.php">Riwayat Perbaikan</a></li>
           <li><a href="tbl_perbaikan.php">Data Perbaikan</a></li>
       </ul>
     </li>
		 <li class="sub-menu">
			 <a href="javascript:;">
				 <i class="fa fa-tasks"></i>
				 <span> Modul </span>
				 </a>
			 <ul class="sub">
					<li><a href="keranjang.php">Olah Barcode</a></li>
				</ul>
		 </li>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="container">
        <h3><i class="fa fa-angle-right"></i> Tambah Lokasi</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <div class="form">
                <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="form_ruang.php">
                  <div class="form-group ">
                    <label for="id_ruang " class="control-label col-lg-2"> ID</label>
                    <div class="col-sm-6">
                      <input class=" form-control" id="id_ruang" name="id_ruang" type="int" />
                    </div>
                  </div>
									<div class="form-group ">
										<label for="lantai" class="control-label col-lg-2"> Lantai</label>
										<div class="col-sm-6">
											<select name="lantai" class="form-control" required>
												<option value="">  Pilih  </option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
										</select>
										</div>
									</div>
                  <div class="form-group ">
                    <label for="nama_ruang" class="control-label col-lg-2"> Nama Ruang</label>
                    <div class="col-sm-6">
                      <input class="form-control " id="nama_ruang" name="nama_ruang" type="text" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="deskripsi" class="control-label col-lg-2"> Deskripsi</label>
                    <div class="col-sm-6">
                      <input class="form-control " id="deskripsi" name="deskripsi" type="text" />
                    </div>
                  </div>
                  <div class="modal-footer">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" name="simpan" type="submit" >Submit</button>
                    <a href="lokasi.php" class="btn btn-theme04">Cancel</a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
        </div>
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; <?php echo date("Y"); ?> | Inventaris Tata Usaha UNESA
        </p>
        <a href="form_ruang.php#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <script src="lib/form-validation-script.js"></script>

</body>
</html>

<?php
 // cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['simpan'])){
     $id_ruang = $_POST['id_ruang'];
     $lantai = $_POST['lantai'];
     $nama_ruang = $_POST['nama_ruang'];
     $deskripsi = $_POST['deskripsi'];

     // buat query
    $mysqli = "INSERT INTO tb_lokasi SET id_ruang='$id_ruang', lantai='$lantai', nama_ruang='$nama_ruang', deskripsi='$deskripsi'";

    $result = mysqli_query($connection, $mysqli);

     // apakah query simpan berhasil?
    if( $result ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
				?>
					<script language="javascript">
						alert("Data berhasil Ditambah!");
						document.location="lokasi.php";
					</script>
				<?php
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
				?>
					<script language="javascript">
						alert("Data Gagal Ditambah!");
						document.location="form_ruang.php";
					</script>
				<?php
    }
 }

 mysqli_close($connection);
 ?>
