<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
	$(function()
	{
		$(document).on('click', '.btn-add', function(e)
		{
			e.preventDefault();

			var controlForm = $('.controls:first'),
			currentEntry = $(this).parents('.entry:first'),
			newEntry = $(currentEntry.clone()).appendTo(controlForm);

			newEntry.find('#task_text').val('');
			newEntry.find('#pic').val('');
			newEntry.find('#date').val('');
			controlForm.find('.entry:not(:last) .btn-add')
			.removeClass('btn-add').addClass('btn-remove')
			.removeClass('btn-outline-info').addClass('btn-outline-danger')
			.html('<i class="ion-android-delete"></i>');
		}).on('click', '.btn-remove', function(e)
		{
			$(this).parents('.entry:first').remove();

			e.preventDefault();
			return false;
		});
	});
</script>

<div class="main-content">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<header class="card-header">
					<h4 class="card-title">
						<strong>Entry Data Grup Lembur</strong>
					</h4>
				</header>

				<div class="card-body">
					<div class="row bb-1 mb-3">
						<div class="col-md-4 col-12">
							<div class="form-group">
								<label class="require">Nama Grup</label>
								<input type="text" name="" value="" placeholder="Enter here" class="form-control">
							</div>
						</div>

						<div class="col-md-4 col-12">
							<label class="require">Masa berlaku grup</label>
							<div class="input-group" data-provide="datepicker">
								<input type="text" class="form-control" placeholder="Enter here">
								<div class="input-group-prepend input-group-append">
									<span class="input-group-text">sampai</span>
								</div>
								<input type="text" class="form-control" placeholder="Enter here">
							</div>
						</div>

						<div class="col-md-4 col-12">
							<div class="form-group">
								<label class="">Karyawan</label>
								<select name="" data-provide="selectpicker" class="form-control" data-live-search="true">
									<option value=""></option>
								</select>
							</div>
						</div>
					</div>

					<div class="control-group" id="fields">
						<div class="controls">
							<div class="entry">
								<div class="row">
									<div class="col-md-4 col-12">
										<div class="form-group">
											<label class="">Hari</label>
											<select name="" data-provide="selectpicker" class="form-control" data-live-search="true" title="Pilih hari" multiple="" data-max-option="7">
												<option value="">1</option>
												<option value="">2</option>
											</select>
										</div>
									</div>

									<div class="col-md-4 col-12">
										<div class="form-group">
											<label>Masuk</label>
											<input type="text" class="form-control" data-provide="timepicker" data-show-meridian="false">
										</div>
									</div>

									<div class="col-md-4 col-12">
										<div class="form-group">
											<label>Pulang</label>
											<input type="text" class="form-control" data-provide="timepicker" data-show-meridian="false">
										</div>
									</div>
								</div>

								<div class="d-flex justify-content-center">
									<button class="btn btn-icons btn-rounded btn-outline-info btn-add" type="submit">
										<span class="ion-ios-plus-outline"></span>
									</button>
								</div>
							</div>
						</div>
					</div>
					
					<hr>

					<div class="flexbox">
						<button class="btn btn-secondary" type="button">Kembali</button>
						<button class="btn btn-primary" type="submit">Simpan</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>