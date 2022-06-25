
<div class="col-md-12 ">
    <div class="card card-info">
<div class="card-header">
        <h3 class="card-title">Tambah Catatan Perjalanan</h3>
    </div>
							<div class="x_panel">
								<div class="x_title">
									<h2>Input Data Perjalanan Anda</h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br>
									<form action="simpan_catatan.php" method="post" class="form-horizontal form-label-left">

										<div class="form-group row ">
											<label class="control-label col-md-3 col-sm-3 "><h4>Pilih Tanggal</h4></label>
											<div class="col-md-9 col-sm-9 ">
												<input type="date" class="form-control" placeholder="Masukkan Tanggal">
											</div>
										</div>

                                        <div class="form-group row ">
											<label class="control-label col-md-3 col-sm-3 "><h4>Pilih Jam</h4></label>
											<div class="col-md-9 col-sm-9 ">
												<input type="time" class="form-control" placeholder="Masukkan Jam">
											</div>
										</div>

                                        <div class="form-group row ">
											<label class="control-label col-md-3 col-sm-3 "><h4>Pilih Lokasi</h4></label>
											<div class="col-md-9 col-sm-9 ">
												<input type="text" class="form-control" placeholder="Masukkan Lokasi Anda">
											</div>
										</div>

                                        <div class="form-group row ">
											<label class="control-label col-md-3 col-sm-3 "><h4>Suhu Tubuh</h4></label>
											<div class="col-md-9 col-sm-9 ">
												<input type="number" class="form-control" placeholder="Masukkan Suhu Tubuh">
											</div>
										</div>
										
										<div class="ln_solid"></div>
										<div class="form-group">
											<div class="col-md-9 col-sm-9  offset-md-3">
                                                <button type="submit" class="btn btn-success"> <i class="fa fa-save" > </i> SIMPAN</button>
												<button type="reset" class="btn btn-primary"> <i class="fa fa-trash" > </i> HAPUS</button>
											</div>
										</div>

									</form>
								</div>
							</div>
						</div>
</div>