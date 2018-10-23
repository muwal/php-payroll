<div class="main-content">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<h4 class="card-title"><strong>Grup Kerja</strong></h4>

				<div class="card-body">
					<div class="flexbox mb-20">

						<div class="btn-toolbar">
							<div class="btn-group btn-group-sm">
								<button class="btn" title="Copy grup" data-provide="tooltip"><i class="pe-7s-copy-file"></i></button>
								<a href="?page=inputgrupkerja" class="btn" title="Tambah grup" data-provide="tooltip"><i class="ion-plus-round"></i></a>
							</div>
						</div>
					</div>

					<div class="table-responsive-md">
						<table class="table table-striped table-bordered" cellspacing="0" data-provide="datatables" data-ajax="">
							<thead>
								<tr>
									<th width="6%">No</th>
									<th>Nama Grup</th>
									<th>Tanggal Mulai</th>
									<th>Tanggal Akhir</th>
									<th width="10%">Aksi</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td>
										<a href="?page=detailgrupkerja" class="btn btn-sm btn-secondary">Detail</a>
									</td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<th width="6%">No</th>
									<th>Nama Grup</th>
									<th>Tanggal Mulai</th>
									<th>Tanggal Akhir</th>
									<th width="10%">Aksi</th>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal modal-right fade" id="modal-right" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Entry Pajak Tanggungan</h5>
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form class="form-type-material">
						<div class="form-group">
							<label class="require">Keterangan</label>
							<input type="text" name="" value="" class="form-control" required="true" autocomplete="off" autofocus="true">
						</div>

						<div class="form-group">
							<!-- <label class="require">PTKP</label> -->
							<div class="input-group">
								<div class="input-group-input">
									<input type="number" min="0" required="true" class="form-control" aria-label="PTKP">
									<label class="require">PTKP</label>
								</div>
								<div class="input-group-prepend">
									<span class="input-group-text">IDR</span>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer modal-footer-uniform">
					<button type="button" class="btn btn-bold btn-pure btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-bold btn-pure btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>
</div>
</div>