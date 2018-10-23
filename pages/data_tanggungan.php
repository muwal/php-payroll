<div class="main-content">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<h4 class="card-title"><strong>Data Tanggungan</strong></h4>

				<div class="card-body">
					<div class="flexbox mb-20">

						<div class="btn-toolbar">
							<div class="btn-group btn-group-sm">
								<button class="btn" title="Refresh" onclick="function refresh()" data-provide="tooltip"><i class="ion-refresh"></i></button>
								<button type="button" data-toggle="modal" data-target="#modal-right" class="btn" title="Add new" data-provide="tooltip"><i class="ion-plus-round"></i></button>
							</div>

							<div class="btn-group btn-group-sm ml-2 d-none d-sm-flex">
								<button class="btn dropdown-toggle" data-toggle="dropdown">Export</button>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">XLSX</a>
									<a class="dropdown-item" href="#">PDF</a>
								</div>
							</div>

							<div class="btn-group btn-group-sm ml-2 d-none d-sm-flex">
								<button class="btn dropdown-toggle" data-toggle="dropdown">Import</button>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">XLSX</a>
								</div>
							</div>
						</div>
					</div>

					<div class="table-responsive-md">
						<table class="table table-striped table-bordered" cellspacing="0" data-provide="datatables" data-ajax="">
							<thead>
								<tr>
									<th width="6%">No</th>
									<th>Keterangan</th>
									<th>PTKP</th>
									<th width="10%">Aksi</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<th width="6%">No</th>
									<th>Keterangan</th>
									<th>PTKP</th>
									<th width="10%">Aksi</th>
								</tr>
							</tfoot>
						</table>
					</div>
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