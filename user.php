<?php
session_start();
if (empty($_SESSION['nik'])) { ?>
<script type="text/javascript">
    alert('Maaf anda belum login.');
    window.location.assign('index.php');
    </script>
<?php
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Aplikasi Kelas Pintar | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Menyisipkan library Google Maps -->
  <!--  <script src="http://maps.googleapis.com/maps/api/js"></script>

   <script>
    //fungsi initialize untuk mempersiapkan peta
     function initialize() {
       var propertiPeta = {
          center:new google.maps.LatLng(-8.5830695, 116.3202515),
         zoom:9,
           mapTypeId:google.maps.MapTypeId.ROADMAP
         };

         var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
       }
       //event jendela di-load
       google.maps.event.addDomListener(window, 'load', initialize);
   </script> -->
  <style>
  input::-webkit-outer-spin-button,
                input::-webkit-inner-spin-button{
                -webkit-appearance: none;
                margin: 0; }
  </style>
</head>

<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <!-- Right navbar links -->
    
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Aplikasi Kelas Pintar</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="assets/dist/img/n.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['nama_lengkap']; ?>
          </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <a href="user.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          
        
          <li class="nav-header">Interface</li>
          <li class="nav-item">
            <a href="?page=tambah_catatan" class="nav-link">
              <i class="nav-icon fa fa-pencil-alt"></i>
              <p>
                Tambah Catatan
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="?page=data_materi" class="nav-link">
              <i class="nav-icon fa fa-th-list"></i>
              <p>
                Data Materi
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon fa fa-power-off"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
      <!-- Menambahkan ucapan selamat malam, siang, sore secara otomatis -->
    
    <?php 
    if (!empty(@$_GET['page'])) {
      switch (@$_GET['page']) {
        case 'tambah_catatan';
          include'tambah_catatan.php';
        break;

        case 'data_materi';
          include'data_materi.php';
        break;

        case 'edit_catatan.php';
          include'edit_catatan.php';
        break;

        default;
            echo "<h3>Halaman tidak ditemukan!</h3>";
            break;
      }
    }else{
      echo"<br><h4> Selamat datang di Aplikasi Kelas Pintar.<br> Memudahkan mencatat materi anda.</h4>";
      echo"<br>Anda Login Sebagai : ";
      echo"<h4>".$_SESSION['nama_lengkap']."</h4>";
  }
    ?>
     
      <!-- Isi content -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>SEVIMA 2022</b> Aplikasi Kelas Pintar
    </div>
    <strong>Copyright &copy; <?php echo date("Y"); ?> </strong> Naia Fitri
  </footer>

  
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>
</body>
</html>
m