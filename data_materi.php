<div class="card-info">
   <!-- <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3>Data Riwayat Perjalanan</h3>
          </div>
        </div>
      </div>
    </section> -->
            <div class="card-info mb-4">
              <div class="card-header">
              <h5>Data Materi</h5>
                <!-- <a href="export.php" class="btn btn-outline-light text-dark"> Export Data</a> -->
              </div>
            </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Jam</th>
                            <th>Mata Pelajaran</th>
                            <th>File Upload</th>
                            <th>Materi Pelajaran </th>
                            <th>Hapus</th>
                        </tr>
                    </thead>
                <tbody>
                  <?php
                  //memanggil file catatan_user.txt
                  $no=1;
                  $data = file('catatan_user.txt', FILE_IGNORE_NEW_LINES);
                  $user = $_SESSION['nik']."|".$_SESSION['nama_lengkap'];

                  //foreach data sebagai value
                  foreach ($data as $value) {

                    $pisah = explode("|", $value);
                    @$key = $pisah['1']."|".$pisah['2'];
                    if ($key==$user) { ?>

                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $pisah['3'] ?></td>
                        <td><?= $pisah['4'] ?></td>
                        <td><?= $pisah['5'] ?></td>
                        <td><?= $pisah['6'] ?></td>
                        <td><?= $pisah['7'] ?></td>
                        <td>
                          <a onclick="return confirm('Apakah anda ingin menghapus data ini..?')" 
                          href="hapus_catatan.php?id_catatan=<?= $pisah['0'] ?>" class="btn btn-danger">
                          <i class="fa fa-trash"></i> Hapus
                      </td>
                  </tr>
                  <?php } } ?>
                </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->