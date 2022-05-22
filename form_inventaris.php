<?php
include 'connect.php';
session_start();
if (!$_SESSION) {
	header('Location: login.php');
}

?>

<!DOCTYPE html>
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
     <li class="sub-menu">
       <a href="javascript:;">
         <i class="fa fa-cogs"></i>
         <span> Transaksi </span>
         </a>
       <ul class="sub">
				 <li><a href="tbl_pinjam.php">Data Peminjaman</a></li>
				  <li><a href="tbl_perbaikan.php">Data Perbaikan</a></li>
       </ul>
     </li>
     <li class="sub-menu">
       <a href="javascript:;">
         <i class="fa fa-book"></i>
         <span> Laporan </span>
         </a>
       <ul class="sub">
         <li><a href="history.php">Riwayat Perbaikan</a></li>
         <li><a href="history_pinjam.php">Riwayat Peminjaman</a></li>
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
        <h3><i class="fa fa-angle-right"></i> Tambah Inventaris</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <div class="form">
                <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="proses_tambah.php">
                  <div class="form-group ">
                    <label for="no_inventaris " class="control-label col-lg-2">No. Inventaris</label>
                    <div class="col-sm-6">
                      <input class=" form-control" id="no_inventaris" name="no_inventaris" type="text" />
                    </div>
                  </div>
									<div class="form-group ">
                    <label for="kode_barcode" class="control-label col-lg-2">Kode Barcode</label>
                    <div class="col-sm-6">
                      <input class="form-control " id="kode_barcode" name="kode_barcode" type="text" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="nama_barang" class="control-label col-lg-2">Nama Barang</label>
                    <div class="col-sm-6">
                      <input class="form-control " id="nama_barang" name="nama_barang" type="text" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="merk" class="control-label col-lg-2">Merk</label>
                    <div class="col-sm-6">
                      <input class="form-control " id="merk" name="merk" type="text" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="pengguna" class="control-label col-lg-2">Pengguna</label>
                    <div class="col-sm-6">
                      <input class="form-control " id="pengguna" name="pengguna" type="text" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="processor" class="control-label col-lg-2">Processor</label>
                    <div class="col-sm-6">
                      <input class="form-control " id="processor" name="processor" type="text" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="ram" class="control-label col-lg-2">RAM</label>
                    <div class="col-sm-6">
                      <input class="form-control " id="ram" name="ram" type="text" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="hardisk" class="control-label col-lg-2">Hardisk</label>
                    <div class="col-sm-6">
                      <input class="form-control " id="hardisk" name="hardisk" type="text" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="monitor_inc" class="control-label col-lg-2">Monitor(inc)</label>
                    <div class="col-sm-6">
                      <input class="form-control " id="monitor_inc" name="monitor_inc" type="text" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="sistem_operasi" class="control-label col-lg-2">Sistem Operasi</label>
                    <div class="col-sm-6">
                      <input class="form-control " id="sistem_operasi" name="sistem_operasi" type="text" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="anti_virus" class="control-label col-lg-2">Anti Virus</label>
                    <div class="col-sm-6">
                      <input class="form-control " id="anti_virus" name="anti_virus" type="text" />
                    </div>
                  </div>
										<div class="form-group ">
											<label for="nama_ruang" class="control-label col-lg-2"> Nama Ruang</label>
											<div class="col-sm-6">
												<select name="nama_ruang" id="nama_ruang "class="form-control" required>
													<option value="">  Pilih  </option>
													<?php
													$sql_ruangan = mysqli_query($connection, "SELECT*FROM tb_lokasi") or die (mysqli_error($connection));
													while ($data_ruang = mysqli_fetch_array($sql_ruangan)) {
														echo '<option value="' .$data_ruang['nama_ruang'].'">' .$data_ruang['nama_ruang'].'</option>';
													}
													 ?>
											</select>
											</div>
										</div>
										<div class="form-group ">
											<label for="kondisi" class="control-label col-lg-2"> Kondisi</label>
											<div class="col-sm-6">
												<select name="kondisi" class="form-control" required>
													<option value="">  Pilih  </option>
													<option value="baik">Baik</option>
													<option value="rusak">Rusak</option>
											</select>
											</div>
										</div>
                  <div class="form-group ">
                    <label for="pengentri" class="control-label col-lg-2">Pengentri</label>
                    <div class="col-sm-6">
                      <input class="form-control " name="pengentri" type="text" value="<?php echo $_SESSION['nama']; ?>"/>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" name="simpan" type="submit">Submit</button>
                    <a href="tbl_inventaris.php" class="btn btn-theme04">Cancel</a>
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
        <a href="form_inventaris.php#" class="go-top">
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
