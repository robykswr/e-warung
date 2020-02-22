 <?php
error_reporting();
session_start();
if (!isset($_SESSION['login'])) {
  echo "<script>
        window.location.href='login.php'
        </script>";
}
include 'include/conn.php';

// $username = isset($_SESSION['username']) ? $_SESSION['username'] : false ;


?>


<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

	<title>SISTEM PEMBUKUAN WARUNG</title>
  <link rel="icon" type="image/png" href="assets/ikon/png/32/shop.png"/>
	 <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="assets/css/sb-admin-2.min.css">
    <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    

  
</head>
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
         <img src="assets/ikon/png/32/shop.png">
        </div>
        <span class="sidebar-brand-text mx-3" style="">E-WARUNG</span>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="?script=home">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-folder"></i>
          <span>Master</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Master:</h6>
            <a class="collapse-item" href="?script=costumer">Costumer</a>
            <a class="collapse-item" href="?script=toko">Toko Suplier</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-folder"></i>
          <span>Transaksi</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Transaksi:</h6>
            <a class="collapse-item" href="?script=penjualan">Penjulan</a>
            <a class="collapse-item" href="?script=pembelian">Pembelian</a>

          </div>
        </div>
      </li>
  
       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Laporan</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Laporan :</h6>
            <a class="collapse-item" href="?script=rekpenjualan">Rekapitulasi Penjualan</a>
            
          </div>
        </div>
      </li>
  
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse-item" aria-expanded="true" aria-controls="collapse-item">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Utilities</span>
        </a>
        <div id="collapse-item" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="?script=user">Tambah User</a>
            
          </div>
        </div>
      </li>

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

           <h4 class="sidebar-brand-text mx-3" style="font-family: time-new-romance;color: #31bbbf; font-weight: bold">SISTEM PEMBUKUAN WARUNG </h4>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"> SELAMAT DATANG, <b><?php echo strtoupper($_SESSION['nama']);?></b></span>
                <img class="img-profile rounded-circle" src="image/koswara.png" >
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>

                <div class="dropdown-divider"></div>
                <a class="dropdown-item" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>

        <!-- End of Topbar -->
        <div>
         <?php 
    
    $script = urlencode($_GET['script']);
    $action = @$_GET['action'];
    
    if ($script == 'home') {
          include 'home.php';
    } elseif ($script == 'costumer') {
          if($action == ''){ 
          include "script/master/costumer/index.php";
        }elseif ($action == 'add') {
          include "script/master/costumer/add.php";
        }elseif ($action == 'edit') {
          include "script/master/costumer/edit.php";
        }elseif ($action == 'delete') {
          include "script/master/costumer/delete.php";
        }
      }elseif ($script == 'toko') {
          if ($action == '') {
            include "script/master/toko/index.php";
          }elseif ($action == 'add') {
            include 'script/master/toko/add.php';
          }elseif ($action == 'edit') {
            include 'script/master/toko/edit.php';
          }elseif ($action == 'delete') {
            include 'script/master/toko/delete.php';
          }
      }elseif ($script == 'penjualan') {
        if ($action == '') {
          include 'script/transaksi/penjualan/index.php';
        }elseif ($action == 'add') {
          include 'script/transaksi/penjualan/add.php';
        }elseif ($action == 'edit'){
          include "script/transaksi/penjualan/edit.php";
        }elseif ($action == 'delete') {
         include "script/transaksi/penjualan/delete.php";
        }
      }elseif ($script == 'pembelian') {
          if ($action == '') {
            include "script/transaksi/pembelian/index.php";
          }elseif ($action == 'add') {
            include 'script/transaksi/pembelian/add.php';
          }elseif ($action == 'edit') {
            include 'script/transaksi/pembelian/edit.php';
          }elseif ($action == 'delete') {
            include 'script/transaksi/pembelian/delete';
          }
      }elseif ($script == 'user') {
        if ($action == ''){
          include 'script/utilities/user/index.php';
        }elseif ($action == 'add') {
          include 'script/utilities/user/add.php';
        }elseif ($action == 'edit') {
          include 'script/utilities/user/edit.php';
        }elseif ($action == 'delete') {
          include 'script/utilities/user/delete.php';
        }
      }elseif ($script == 'rekpenjualan') {
          if ($action == '') {
            include 'script/laporan/laporan_penjualan/index.php';
          }elseif($action == 'lap')
          include 'script/laporan/laporan_penjualan/lap.php';
          
      } else{
        echo "<h3>belom ada data </h3>";
      }
 
    ?>
  </div>
    </div>

  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto text-muted">
            <span>Copyright &copy; Robby Koswara</span>
          </div>
        </div>
      </footer>

</div>
 <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Confirm</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Apakah Anda Yakin Ingin Keluar.?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>
</div>	


<script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="assets/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="assets/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="assets/js/demo/chart-area-demo.js"></script>
  <script src="assets/js/demo/chart-pie-demo.js"></script>
   <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="assets/js/demo/datatables-demo.js"></script>


</body>
</html>