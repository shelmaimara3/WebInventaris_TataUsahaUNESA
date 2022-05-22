<?php
  include '../connect.php';
  session_start();
  if (!$_SESSION) {
  	header('Location:../login.php');
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
          <li><a class="logout" href="../logout.php">Logout</a></li>
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
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span> Transaksi </span>
              </a>
            <ul class="sub">
              <li><a href="tbl_pinjam.php">Data Peminjaman</a></li>
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
        <h3><i class="fa fa-angle-right"></i> Form Peminjaman</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <div class="form">
                <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="proses_pinjam.php">
                  <div class="form-group ">
                    <label for="id" class="control-label col-lg-2">No. Surat</label>
                    <div class="col-sm-6">
                      <input class=" form-control" id="id" name="id" type="text" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="kode_barcode" class="control-label col-lg-2">Kode Barcode</label>
                    <div class="col-sm-6">
                      <input class="form-control " id="kode_barcode" name="kode_barcode" type="text" required onkeyup="autofill()" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="nama_barang" class="control-label col-lg-2">Nama Barang</label>
                    <div class="col-sm-6">
                      <input class=" form-control" id="nama_barang" name="nama_barang" type="text" readonly />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="nama_peminjam" class="control-label col-lg-2">Nama Peminjam</label>
                    <div class="col-sm-6">
                      <input class="form-control " id="nama_peminjam" name="nama_peminjam" type="text" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="asal_peminjam" class="control-label col-lg-2">Asal</label>
                    <div class="col-sm-6">
                      <input class="form-control " id="asal_peminjam" name="asal_peminjam" type="text" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="no_telp" class="control-label col-lg-2">No. Telp</label>
                    <div class="col-sm-6">
                      <input class="form-control " id="no_telp" name="no_telp" type="text" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="tgl_pinjam" class="control-label col-lg-2">Tanggal Pinjam</label>
                    <div class="col-sm-6">
                      <input class="form-control " id="tgl_pinjam" name="tgl_pinjam" type="date" value="<?php echo $tgl_pinjam['tgl_pinjam'] = date('l, d-m-Y'); echo $tgl_pinjam;?>" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="tgl_kembali" class="control-label col-lg-2">Tanggal Kembali</label>
                    <div class="col-sm-6">
                      <input class="form-control " id="tgl_kembali" name="tgl_kembali" type="date" value="<?php echo  $tgl_kembali = date('l, d-m-Y'); echo $tgl_kembali; ?>" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="pengentri" class="control-label col-lg-2">Pengentri</label>
                    <div class="col-sm-6">
                      <input class="form-control " id="pengentri" name="pengentri" value="<?php echo $_SESSION['nama']; ?>" />
                    </div>
                  </div>
                  <div class="modal-footer">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" name="simpan" type="submit">Submit</button>
                    <a href="tbl_pinjam.php" class="btn btn-theme04">Cancel</a>
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
        <a href="form_validation.php#" class="go-top">
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
  <script type="text/javascript">
	function autofill() {
		var kode_barcode = $ ("#kode_barcode"). val ();
		$.ajax ({
			url : 'ajax.php',
			data : 'kode_barcode='+kode_barcode,
			success : (function(data){
			var json = data,
			obj = JSON.parse(json);
			$("#nama_barang").val (obj.nama_barang);
		})
		})
	}
</script>

</body>
</html>
