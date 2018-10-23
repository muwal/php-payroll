<header class="header bg-ui-general">
	<div class="header-info">
		<div class="left">
			<h2 class="header-title"><strong>Grup</strong> *nama grup*</h2>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="?page=dashboard">Dashboard</a></li>
				<li class="breadcrumb-item"><a href="?page=grupkerja">Grup Lembur</a></li>
				<li class="breadcrumb-item active">Detail Grup Lembur</li>
			</ol>
		</div>
	</div>
</header>

<div class="main-content">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<header class="card-header">
					<h4 class="card-title"><strong>Jadwal Grup</strong></h4>
					<ul class="card-controls">
						<button class="btn dropdown-toggle" data-toggle="dropdown">Aksi</button>
						<div class="dropdown-menu dropdown-menu-right">
							<a class="dropdown-item" href="#">Edit jadwal</a>
							<a class="dropdown-item" href="#">Move member</a>
							<a class="dropdown-item" href="#">Tambah member</a>
							<a class="dropdown-item" href="#">Hapus grup</a>
						</div>
					</ul>
				</header>

				<div class="card-body">

					<div class="table-responsive-sm">
						<table class="table">
							<thead>
								<tr>
									<th>#</th>
									<th>Hari</th>
									<th>Masuk</th>
									<th>Pulang</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-12">
			<div class="card">
				<h4 class="card-title"><strong>Daftar Member</strong></h4>

				<div class="card-body">
					<div class="table-responsive-md">
						<table class="table table-striped table-bordered" cellspacing="0" data-provide="datatables" data-ajax="">
							<thead>
								<tr>
									<th width="5%">No.</th>
									<th width="25%">NIK</th>
									<th>Nama</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<th>No.</th>
									<th>NIK</th>
									<th>Nama</th>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>