<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Aplikasi Kelas Pintar | Edit Menu</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Menyisipkan library Google Maps -->
  <!-- <script src="http://maps.googleapis.com/maps/api/js"></script>

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
    
</head>

<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <!-- Right navbar links -->
    
  </nav>
  <!-- /.navbar -->
  <div class="container">
  
  <div class="card">

<div class="card card-info">
    <div class="card-header">
        <h4> Edit Data Materi </h4>
    </div>
     <!-- /.card-header -->
    <!-- form start -->
    <div class="card-body">
    <?php
        $data= file('.txt', FILE_IGNORE_NEW_LINES);
        $id_catatan = $_GET['id_catatan'];
        foreach($data as $value){
            $pisah = explode("|", $value);
            if($pisah['0']==$id_catatan){
                ?>
        <form action="simpan_edit_catatan.php" method="post">
        <input type="hidden" name="id_catatan" value="<?= $pisah['0']; ?>">
            <div class="form-group">
                <label> Pilih Tanggal </label>
                <input value="<?= $pisah['3']; ?>" name="tanggal" type="date" required class="form-control" placeholder="Masukkan Tanggal">
            </div>

            <div class="form-group">
                <label> Pilih Jam </label>
                <input value="<?= $pisah['4']; ?>" name="jam" type="time" required class="form-control" placeholder="Masukkan Jam">
            </div>

            <div class="form-group">
            <!-- id="googleMap" style="width:100%;height:380px;"> -->
                <label> Mata Pelajaran </label>
                <input value="<?= $pisah['5']; ?>" name="pelajaran" type="text" required class="form-control" placeholder="Masukkan Mata Pelajaran">
            </div>

            <div class="form-group">
                <label> File Upload</label><br>
                <input value="<?= $pisah['6']; ?>" name="file" type="file" required class="form-control" placeholder="Masukkan Suhu Tubuh">
            </div>

            <div class="form-group">
            <label> Kolom Materi</label><br>
                <textarea value="<?= $pisah['7']; ?>" name="materi" cols="80" rows="8">Tulis Materi Anda Disini.. </textarea>
            </div>
            <br>

                <!-- open card footer -->
            <div class="form-group">
                <button type="back" class="btn btn-info" href="riwayat_perjalanan.php"> Kembali </button>
                <button type="submit" class="btn btn-success"> <i class="fa fa-save" > </i> SIMPAN </button>
                <button type="reset" class="btn btn-warning"> <i class="fa fa-trash"> </i> KOSONGKAN </button>
            </div>
        </form>
        <?php 
            }
        }
        ?>
    </div>
    </div>
    </div>
                <!-- /.card-footer -->

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
