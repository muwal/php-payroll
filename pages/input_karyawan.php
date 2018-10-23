<div class="main-content">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-12">
			<div class="card">
				<h4 class="card-title"><strong>Entry</strong> Data Karyawan</h4>

				<div class="card-body">
					<form data-provide="wizard" class="">
						<ul class="nav nav-process nav-process-circle">
							<li class="nav-item">
								<span class="nav-title">Mandatory</span>
								<a class="nav-link" data-toggle="tab" href="#wizard-form-1"></a>
							</li>

							<li class="nav-item">
								<span class="nav-title">Detail Personal</span>
								<a class="nav-link" data-toggle="tab" href="#wizard-form-2"></a>
							</li>

							<li class="nav-item">
								<span class="nav-title">Komponen Gaji</span>
								<a class="nav-link" data-toggle="tab" href="#wizard-form-3"></a>
							</li>

							<li class="nav-item">
								<span class="nav-title">Confirmation</span>
								<a class="nav-link" data-toggle="tab" href="#wizard-form-4"></a>
							</li>
						</ul>


						<div class="tab-content">
							<div class="tab-pane fade " id="wizard-form-1">
								<h6 class="text-uppercase">Data Karyawan</h6>
								<hr class="hr-sm mb-2">
								<div class="row mb-5">
									<div class="col-md-4 col-12">
										<div class="form-group">
											<label class="require">NIK</label>
											<input class="form-control" placeholder="Enter here" type="text" autocomplete="off" required="" autofocus="on">
										</div>
									</div>

									<div class="col-md-2 col-12">
										<div class="form-group">
											<label class="require">No. Absen</label>
											<input class="form-control" placeholder="Enter here" type="text" autocomplete="off" required="">
										</div>
									</div>

									<div class="col-md-6 col-12">
										<div class="form-group">
											<label class="require">Nama Karyawan</label>
											<input class="form-control" placeholder="Enter here" type="text" autocomplete="off" required="">
										</div>
									</div>

									<div class="col-md-6 col-12">
										<label class="require">Tanggal Lahir</label>
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Enter here" data-provide="datepicker" data-date-today-highlight="true">
										</div>
									</div>

									<div class="col-md-6 col-12">
										<div class="form-group">
											<label class="require">Agama</label>
											
											<select name="" class="form-control" placeholder="Enter here">
												<option value="" selected="" readonly></option>
												<option value="">1</option>
											</select>
											
										</div>
									</div>

									<div class="col-md-6 col-12">
										<div class="form-group">
											<label class="require">Jabatan</label>
											
											<select name="" class="form-control" placeholder="Enter here">
												<option value="" selected="" readonly></option>
												<option value="">1</option>
											</select>
											
										</div>
									</div>

									<div class="col-md-6 col-12">
										<div class="form-group">
											<label class="require">Department</label>
											
											<select name="" class="form-control" placeholder="Enter here">
												<option value="" selected="" readonly></option>
												<option value="">1</option>
											</select>
											
										</div>
									</div>

									<div class="col-md-6 col-12">
										<div class="form-group">
											<label class="require">Status Pekerjaan</label>
											
											<select name="" class="form-control" placeholder="Enter here">
												<option value="" selected="" readonly></option>
												<option value="">1</option>
											</select>
											
										</div>
									</div>

									<div class="col-md-6 col-12">
										<div class="form-group">
											<label class="require">Status Kinerja</label>
											
											<select name="" class="form-control" placeholder="Enter here">
												<option value="" selected="" readonly></option>
												<option value="">1</option>
											</select>
											
										</div>
									</div>

									<div class="col-md-6 col-12">
										<label class="require">Masa berlaku kerja</label>
										<div class="input-group" data-provide="datepicker">
											<div class="input-group-prepend">
												<span class="input-group-text">dari</span>
											</div>
											<input type="text" class="form-control" placeholder="Enter here">
											<div class="input-group-prepend input-group-append">
												<span class="input-group-text">sampai</span>
											</div>
											<input type="text" class="form-control" placeholder="Enter here">
										</div>
									</div>


								</div>

								<h6 class="text-uppercase">Data Gaji</h6>
								<hr class="hr-sm mb-2">

								<div class="row mb-5">
									<div class="col-md-6 col-12">
										<div class="form-group">
											<label class="require">Gaji Pokok</label>
											<div class="input-group">
												<div class="input-group-prepend">
													<span class="input-group-text">IDR</span>
												</div>
												<input type="number" name="" value="" class="form-control" placeholder="Enter here" min="0">
											</div>
											
										</div>
									</div>

									<div class="col-md-6 col-12">
										<label class="require">Masa berlaku gaji pokok</label>
										<div class="input-group" data-provide="datepicker">
											<div class="input-group-prepend">
												<span class="input-group-text">dari</span>
											</div>
											<input type="text" class="form-control" placeholder="Enter here">
											<div class="input-group-prepend input-group-append">
												<span class="input-group-text">sampai</span>
											</div>
											<input type="text" class="form-control" placeholder="Enter here">
										</div>
									</div>

									<div class="col-md-6 col-12">
										<div class="form-group">
											<label class="require">Gaji BPJS</label>
											<div class="input-group">
												<div class="input-group-prepend">
													<span class="input-group-text">IDR</span>
												</div>
												<input type="number" name="" value="" class="form-control" placeholder="Enter here" min="0">
											</div>
											
										</div>
									</div>

									<div class="col-md-6 col-12">
										<label class="require">Masa berlaku gaji bpjs</label>
										<div class="input-group" data-provide="datepicker">
											<div class="input-group-prepend">
												<span class="input-group-text">dari</span>
											</div>
											<input type="text" class="form-control" placeholder="Enter here">
											<div class="input-group-prepend input-group-append">
												<span class="input-group-text">sampai</span>
											</div>
											<input type="text" class="form-control" placeholder="Enter here">
										</div>
									</div>

									<div class="col-md-6 col-12">
										<div class="form-group">
											<label class="require">Tunjangan 28</label>
											<div class="input-group">
												<div class="input-group-prepend">
													<span class="input-group-text">IDR</span>
												</div>
												<input type="number" name="" value="" class="form-control" placeholder="Enter here" min="0">
											</div>
											
										</div>
									</div>

									<div class="col-md-6 col-12">
										<label class="require">Masa berlaku tunjangan 28</label>
										<div class="input-group" data-provide="datepicker">
											<div class="input-group-prepend">
												<span class="input-group-text">dari</span>
											</div>
											<input type="text" class="form-control" placeholder="Enter here">
											<div class="input-group-prepend input-group-append">
												<span class="input-group-text">sampai</span>
											</div>
											<input type="text" class="form-control" placeholder="Enter here">
										</div>
									</div>

									<div class="col-md-6 col-12">
										<div class="form-group">
											<label class="require">Tunjangan Makan</label>
											<div class="input-group">
												<div class="input-group-prepend">
													<span class="input-group-text">IDR</span>
												</div>
												<input type="number" name="" value="" class="form-control" placeholder="Enter here" min="0">
											</div>
											
										</div>
									</div>

									<div class="col-md-6 col-12">
										<label class="require">Masa berlaku tunjangan makan</label>
										<div class="input-group" data-provide="datepicker">
											<div class="input-group-prepend">
												<span class="input-group-text">dari</span>
											</div>
											<input type="text" class="form-control" placeholder="Enter here">
											<div class="input-group-prepend input-group-append">
												<span class="input-group-text">sampai</span>
											</div>
											<input type="text" class="form-control" placeholder="Enter here">
										</div>
									</div>

									<div class="col-md-6 col-12">
										<div class="form-group">
											<label class="require">Tunjangan Mesin</label>
											<div class="input-group">
												<div class="input-group-prepend">
													<span class="input-group-text">IDR</span>
												</div>
												<input type="number" name="" value="" class="form-control" placeholder="Enter here" min="0">
											</div>
											
										</div>
									</div>

									<div class="col-md-6 col-12">
										<label class="require">Masa berlaku tunjangan mesin</label>
										<div class="input-group" data-provide="datepicker">
											<div class="input-group-prepend">
												<span class="input-group-text">dari</span>
											</div>
											<input type="text" class="form-control" placeholder="Enter here">
											<div class="input-group-prepend input-group-append">
												<span class="input-group-text">sampai</span>
											</div>
											<input type="text" class="form-control" placeholder="Enter here">
										</div>
									</div>

									<div class="col-md-6 col-12">
										<div class="form-group">
											<label class="require">Tunjangan transport</label>
											<div class="input-group">
												<div class="input-group-prepend">
													<span class="input-group-text">IDR</span>
												</div>
												<input type="number" name="" value="" class="form-control" placeholder="Enter here" min="0">
											</div>
											
										</div>
									</div>

									<div class="col-md-6 col-12">
										<label class="require">Masa berlaku tunjangan transport</label>
										<div class="input-group" data-provide="datepicker">
											<div class="input-group-prepend">
												<span class="input-group-text">dari</span>
											</div>
											<input type="text" class="form-control" placeholder="Enter here">
											<div class="input-group-prepend input-group-append">
												<span class="input-group-text">sampai</span>
											</div>
											<input type="text" class="form-control" placeholder="Enter here">
										</div>
									</div>
								</div>

								<h6 class="text-uppercase">Data Potongan</h6>
								<hr class="hr-sm mb-2">

								<div class="row">
									<div class="col-md-3 col-12">
										<div class="form-group">
											<label class="require">No. NPWP</label>
											<input type="number" name="" value="" min="0" placeholder="Enter here" class="form-control">
										</div>
									</div>

									<div class="col-md-3 col-12">
										<div class="form-group">
											<label class="require">No. BPJS</label>
											<input type="number" name="" value="" min="0" placeholder="Enter here" class="form-control">
										</div>
									</div>

									<div class="col-md-6 col-12">
										<div class="form-group">
											<label class="require">Status Tanggungan</label>
											<select name="" class="form-control">
												<option value=""></option>
											</select>
										</div>
									</div>

									<div class="col-md-6 col-12">
										<div class="form-group">
											<label class="require">BPJS Kesehatan</label>
											<div class="input-group">
												<input type="number" name="" value="" class="form-control" placeholder="Enter here" min="0">
												<div class="input-group-prepend">
													<span class="input-group-text">%</span>
												</div>
											</div>
											
										</div>
									</div>

									<div class="col-md-6 col-12">
										<label class="require">Masa berlaku BPJS Kesehatan</label>
										<div class="input-group" data-provide="datepicker">
											<div class="input-group-prepend">
												<span class="input-group-text">dari</span>
											</div>
											<input type="text" class="form-control" placeholder="Enter here">
											<div class="input-group-prepend input-group-append">
												<span class="input-group-text">sampai</span>
											</div>
											<input type="text" class="form-control" placeholder="Enter here">
										</div>
									</div>

									<div class="col-md-6 col-12">
										<div class="form-group">
											<label class="require">BPJS Jaminan Hari Tua</label>
											<div class="input-group">
												<input type="number" name="" value="" class="form-control" placeholder="Enter here" min="0">
												<div class="input-group-prepend">
													<span class="input-group-text">%</span>
												</div>
											</div>
											
										</div>
									</div>

									<div class="col-md-6 col-12">
										<label class="require">Masa berlaku BPJS Jaminan Hari Tua</label>
										<div class="input-group" data-provide="datepicker">
											<div class="input-group-prepend">
												<span class="input-group-text">dari</span>
											</div>
											<input type="text" class="form-control" placeholder="Enter here">
											<div class="input-group-prepend input-group-append">
												<span class="input-group-text">sampai</span>
											</div>
											<input type="text" class="form-control" placeholder="Enter here">
										</div>
									</div>

									<div class="col-md-6 col-12">
										<div class="form-group">
											<label class="require">BPJS Jaminan Pensiun</label>
											<div class="input-group">
												<input type="number" name="" value="" class="form-control" placeholder="Enter here" min="0">
												<div class="input-group-prepend">
													<span class="input-group-text">%</span>
												</div>
											</div>
											
										</div>
									</div>

									<div class="col-md-6 col-12">
										<label class="require">Masa berlaku BPJS Jaminan Pensiun</label>
										<div class="input-group" data-provide="datepicker">
											<div class="input-group-prepend">
												<span class="input-group-text">dari</span>
											</div>
											<input type="text" class="form-control" placeholder="Enter here">
											<div class="input-group-prepend input-group-append">
												<span class="input-group-text">sampai</span>
											</div>
											<input type="text" class="form-control" placeholder="Enter here">
										</div>
									</div>
								</div>

							</div>



							<div class="tab-pane fade active show" id="wizard-form-2">
								<h6 class="text-uppercase">Detail Personal</h6>
								<hr class="hr-sm mb-2">

								<div class="row">
									<div class="col-md-3 col-12">
										<div class="form-group">
											<label class="require">Finger ID</label>
											<input type="number" name="" value="" placeholder="Enter here" class="form-control" min="0">
										</div>
									</div>

									<div class="col-md-3 col-12">
										<h6 class="require">Jenis Kelamin</h6>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="jk" id="inlineRadio1" value="option1">
											<label class="form-check-label" for="inlineRadio1">Laki-laki</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="jk" id="inlineRadio2" value="option2">
											<label class="form-check-label" for="inlineRadio2">Perempuan</label>
										</div>
									</div>

									<div class="col-md-3 col-12">
										<div class="form-group">
											<label class="">No. KTP</label>
											<input type="number" min="0" name="" value="" placeholder="Enter here" class="form-control">
										</div>
									</div>

									<div class="col-md-3 col-12">
										<div class="form-group">
											<label class="">Tempat Lahir</label>
											<input type="text" name="" value="" placeholder="Enter here" class="form-control">
										</div>
									</div>

									<div class="col-md-6 col-12">
										<div class="form-group">
											<label class="">Alamat Sekarang</label>
											<input type="text" name="" value="" placeholder="Enter here" class="form-control">
										</div>
									</div>

									<div class="col-md-6 col-12">
										<div class="form-group">
											<label class="">Alamat Asal</label>
											<input type="text" name="" value="" placeholder="Enter here" class="form-control">
										</div>
									</div>

									<div class="col-md-6 col-12">
										<div class="form-group">
											<label class="">Kota/Kabupaten</label>
											<select name="" data-provide="selectpicker" class="form-control" data-live-search="true">
												<option value=""></option>
											</select>
										</div>
									</div>

									<div class="col-md-6 col-12">
										<div class="form-group">
											<label class="">Kecamatan</label>
											<select name="" data-provide="selectpicker" class="form-control" data-live-search="true">
												<option value=""></option>
											</select>
										</div>
									</div>

									<div class="col-md-6 col-12">
										<div class="form-group">
											<label class="">Telp</label>
											<input type="number" min="0" name="" value="" placeholder="Enter here" class="form-control">
										</div>
									</div>

									<div class="col-md-6 col-12">
										<div class="form-group">
											<label class="">No. HP</label>
											<input type="number" min="0" name="" value="" placeholder="Enter here" class="form-control">
										</div>
									</div>

									<div class="col-md-6 col-12">
										<div class="form-group">
											<label class="">Nama Kerabat 1</label>
											<input type="text" name="" value="" placeholder="Enter here" class="form-control">
										</div>
									</div>

									<div class="col-md-6 col-12">
										<div class="form-group">
											<label class="">Nama Kerabat 2</label>
											<input type="text" name="" value="" placeholder="Enter here" class="form-control">
										</div>
									</div>

									<div class="col-md-6 col-12">
										<div class="form-group">
											<label class="">Telp Kerabat 1</label>
											<input type="number" min="0" name="" value="" placeholder="Enter here" class="form-control">
										</div>
									</div>

									<div class="col-md-6 col-12">
										<div class="form-group">
											<label class="">Telp Kerabat 2</label>
											<input type="number" min="0" name="" value="" placeholder="Enter here" class="form-control">
										</div>
									</div>
								</div>
							</div>



							<div class="tab-pane fade" id="wizard-form-3">
								<h6 class="text-uppercase">Komponen Gaji</h6>
								<hr class="hr-sm mb-2">

								<div class="row">
									<div class="col-md-4 col-12">
										<div class="form-group">
											<label class="require">Tunjangan 500</label>
										</div>
									</div>
								</div>

							</div>



							<div class="tab-pane fade" id="wizard-form-4">
								<br><br>
								<p class="text-center fs-35 text-muted">Ready to go?</p>
								<p class="text-center text-gray">Rapidiously facilitate web-enabled products through innovative collaboration.</p>
								<hr class="w-100px">
								<br>

								<div class="px-20">
									<div class="form-group row">
										<label class="col-form-label col-sm-4">Username</label>
										<div class="form-control-plaintext col-sm-8">TheAdmin</div>
									</div>

									<div class="form-group row">
										<label class="col-form-label col-sm-4">Email</label>
										<div class="form-control-plaintext col-sm-8">support@theadmin.io</div>
									</div>

									<div class="form-group row">
										<label class="col-form-label col-sm-4">Card number</label>
										<div class="form-control-plaintext col-sm-8">xxxx-xxxx-xxxx-3648</div>
									</div>
								</div>

							</div>
						</div>

						<hr>

						<div class="flexbox">
							<button class="btn btn-secondary" data-wizard="prev" type="button">Back</button>
							<button class="btn btn-secondary" data-wizard="next" type="button">Next</button>
							<button class="btn btn-primary d-none" data-wizard="finish" type="submit">Finish</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>