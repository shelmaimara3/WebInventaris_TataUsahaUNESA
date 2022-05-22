<?php
include 'connect.php';
session_start();
if (!$_SESSION) {
  header('Location:login.php');
}
// kalau tidak ada id di query string

$id_ruang = $_GET['id_ruang'];
$query = "SELECT * FROM tb_lokasi WHERE id_ruang= '$id_ruang'";
$sql = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($sql);

if( mysqli_num_rows($sql) > 1 ){
    die("data tidak ditemukan...");
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
  <link href="lib/advanced-datatable/css/demo_page.css" rel="stylesheet" />
  <link href="lib/advanced-datatable/css/demo_table.css" rel="stylesheet" />
  <link rel="stylesheet" href="lib/advanced-datatable/css/DT_bootstrap.css" />
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
          <!-- settings start -->
          <li class="dropdown">

        <!--  notification end -->
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
              <li><a href="list_user.php"> Daftar Pengguna</a></li>
              <li><a href="lokasi.php"> Daftar Lokasi</a></li>
            </ul>
          </li>
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
        <h3><i class="fa fa-angle-right"></i> Edit Lokasi</h3>
        <div class="row mb">
          <form class="cmxform form-horizontal style-form" method="POST" action="prosesedit_lokasi.php">
            <div class="form-group ">
              <label for="id_ruang" class="control-label col-lg-2">ID</label>
              <div class="col-sm-6">
                <input class=" form-control" id="id_ruang" name="id_ruang" type="int" value="<?php echo $row['id_ruang'] ?>" />
             </div>
           </div>
           <div class="form-group ">
             <label for="lantai" class="control-label col-lg-2"> Lantai</label>
             <div class="col-sm-6">
               <select name="lantai" class="form-control">
                 <option value="<?php echo $row['lantai'];  ?>"><?php echo $row['lantai'];  ?></option>
                 <option value="1">1</option>
                 <option value="2">2</option>
                 <option value="3">3</option>
                 <option value="4">4</option>
                 <option value="5">5</option>
             </select>
             </div>
           </div>
            <div class="form-group ">
              <label for="nama_ruang" class="control-label col-lg-2" > Nama Ruang</label>
              <div class="col-sm-6">
                <input class="form-control " id="nama_ruang" name="nama_ruang" type="text" value="<?php echo $row['nama_ruang'];  ?>" />
              </div>
            </div>
            <div class="form-group ">
              <label for="deskripsi" class="control-label col-lg-2" >Deskripsi Ruang</label>
              <div class="col-sm-6">
                <input class="form-control " id="deskripsi" name="deskripsi" type="text" value="<?php echo $row['deskripsi'];  ?>" />
              </div>
            </div>
            <div class="modal-footer">
              <div class="col-lg-offset-2 col-lg-10">
                <button class="btn btn-theme" name="simpan" type="submit" value="Simpan">Save</button>
                <a href="lokasi.php" class="btn btn-theme04">Cancel</a>
              </div>
            </div>
                </thead>
                </tbody>
              </table>
            </div>
          </div>
          <!-- page end-->
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
        <div class="credits">
        </div>
        <a href="edit.php#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script type="text/javascript" language="javascript" src="lib/advanced-datatable/js/jquery.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script type="text/javascript" language="javascript" src="lib/advanced-datatable/js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="lib/advanced-datatable/js/DT_bootstrap.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <script type="text/javascript">
    /* Formating function for row details */
    function fnFormatDetails(oTable, nTr) {
      var aData = oTable.fnGetData(nTr);
      var sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
      sOut += '<tr><td>Rendering engine:</td><td>' + aData[1] + ' ' + aData[4] + '</td></tr>';
      sOut += '<tr><td>Link to source:</td><td>Could provide a link here</td></tr>';
      sOut += '<tr><td>Extra info:</td><td>And any further details here (images etc)</td></tr>';
      sOut += '</table>';

      return sOut;
    }

    $(document).ready(function() {
      /*
       * Insert a 'details' column to the table
       */
      var nCloneTh = document.createElement('th');
      var nCloneTd = document.createElement('td');
      nCloneTd.innerHTML = '<img src="lib/advanced-datatable/images/details_open.png">';
      nCloneTd.className = "center";

      $('#hidden-table-info thead tr').each(function() {
        this.insertBefore(nCloneTh, this.childNodes[0]);
      });

      $('#hidden-table-info tbody tr').each(function() {
        this.insertBefore(nCloneTd.cloneNode(true), this.childNodes[0]);
      });

      /*
       * Initialse DataTables, with no sorting on the 'details' column
       */
      var oTable = $('#hidden-table-info').dataTable({
        "aoColumnDefs": [{
          "bSortable": false,
          "aTargets": [0]
        }],
        "aaSorting": [
          [1, 'asc']
        ]
      });

      /* Add event listener for opening and closing details
       * Note that the indicator for showing which row is open is not controlled by DataTables,
       * rather it is done here
       */
      $('#hidden-table-info tbody td img').live('click', function() {
        var nTr = $(this).parents('tr')[0];
        if (oTable.fnIsOpen(nTr)) {
          /* This row is already open - close it */
          this.src = "lib/advanced-datatable/media/images/details_open.png";
          oTable.fnClose(nTr);
        } else {
          /* Open this row */
          this.src = "lib/advanced-datatable/images/details_close.png";
          oTable.fnOpen(nTr, fnFormatDetails(oTable, nTr), 'details');
        }
      });
    });
  </script>
</body>
</html>
