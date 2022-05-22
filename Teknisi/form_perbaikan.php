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
           <li><a href="tbl_perbaikan.php">Data Perbaikan</a></li>
       </ul>
     </li>
     <li class="sub-menu">
       <a href="javascript:;">
         <i class="fa fa-tasks"></i>
         <span> Laporan </span>
         </a>
       <ul class="sub">
          <li><a href="history.php">Riwayat Perbaikan</a></li>
        </ul>
     </li>
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Form Perbaikan</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <div class="form">
                <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="proses_perbaikan.php">
                  <div class="form-group ">
                    <label for="id_perbaikan" class="control-label col-lg-2">No. Perbaikan</label>
                    <div class="col-sm-6">
                      <input class=" form-control" id="id_perbaikan" name="id_perbaikan" type="text" />
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
                      <input class="form-control " id="nama_barang" name="nama_barang" type="text" readonly />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="lokasi" class="control-label col-lg-2"> Lokasi</label>
                    <div class="col-sm-6">
                      <input class="form-control " id="nama_ruang" name="nama_ruang" type="text" readonly />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="masalah" class="control-label col-lg-2">Uraian Masalah</label>
                    <div class="col-sm-6">
                      <textarea class="form-control " id="masalah" name="masalah" type="text"> </textarea>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="solusi" class="control-label col-lg-2">Solusi</label>
                    <div class="col-sm-6">
                      <textarea class="form-control " id="solusi" name="solusi" type="text"> </textarea>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="tgl_catat" class="control-label col-lg-2">Tanggal Catat</label>
                    <div class="col-sm-6">
                      <input class="form-control " id="tgl_catat" name="tgl_catat" type="date" value="<?php $tgl_catat = date('l, d-m-Y'); echo $tgl_catat;?>" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="lama_perbaikan" class="control-label col-lg-2">Lama Perbaikan</label>
                    <div class="col-sm-6">
                      <input class="form-control " id="lama_perbaikan" name="lama_perbaikan" type="text" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="biaya" class="control-label col-lg-2">Biaya</label>
                    <div class="col-sm-6">
                      <input class="form-control " id="biaya" name="biaya" type="text" />
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
                      <a href="tbl_perbaikan.php" class="btn btn-theme04">Cancel</a>
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
      $("#nama_ruang").val (obj.nama_ruang);
		})
		})
	}
</script>
</body>
</html>
