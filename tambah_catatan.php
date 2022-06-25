<div class="card card-info mb-2">
<!-- <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3>Input Data Perjalanan Anda.</h3>
          </div>
        </div>
      </div>
    </section> -->
    <div class="card-header">
    <h5>Input Data Perjalanan Anda.</h5>
    </div>
</div>
     <!-- /.card-header -->
    <!-- form start -->
    <div class="card-body">
        <form action="simpan_catatan.php" method="post">
            <div class="form-group">
                <label> Tanggal </label>
                <input disabled value="<?php echo date('d-m-Y');?>" name="tgl" id="tgl" type="text" required class="form-control" >
                
            </div>

            <div class="form-group">
                <label> Jam </label>
                <input disabled value="<?php date_default_timezone_set('Asia/Jakarta');
                //zona waktu Indonesia
                echo date('H:i');?>" name="jam" type="text" required class="form-control" placeholder="Masukkan Jam">
            </div>

            <div class="form-group">
            <!-- id="googleMap" style="width:100%;height:380px;"> -->
                <label> Pilih Lokasi </label>
                <input name="lokasi" type="text" onkeypress='return harusHuruf(event)' required class="form-control" placeholder="Masukkan Lokasi">
            </div>

            <div class="form-group">
                <label> Suhu Tubuh</label>
                <input  name="suhu" type="number" required class="form-control" min="30" max="40" placeholder="Masukkan Suhu Tubuh">
            </div>
            <br>

                <!-- open card footer -->
            <div class="form-group">
                <button type="submit" class="btn btn-success"> <i class="fa fa-save" > </i> SIMPAN </button>
                <button type="reset" class="btn btn-warning"> <i class="fa fa-trash"> </i> KOSONGKAN </button>
            </div>
        </form>
    </div>

    <script> 
    function harusHuruf(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode 
        if ((charCode < 65 || charCode > 90)&&(charCode < 97 || charCode > 122) &&charCode>32)
        return false;
        return true;
    }
    </script>
                <!-- /.card-footer -->
