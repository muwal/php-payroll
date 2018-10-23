<div class="main-content">
	

	<div class="row">
		<div class="col-12">
		<!--
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        | Ajax sourced data
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        !-->
        <div class="card">
        	<h4 class="card-title"><strong>Data Karyawan</strong></h4>

        	<div class="card-body">
        		<div class="flexbox mb-20">

        			<div class="btn-toolbar">
        				<div class="btn-group btn-group-sm">
        					<button class="btn" title="Refresh" onclick="function refresh()" data-provide="tooltip"><i class="ion-refresh"></i></button>
        					<a class="btn" href="?page=inputkaryawan" title="Add new" data-provide="tooltip"><i class="ion-plus-round"></i></a>
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
        						<th>NIK</th>
        						<th>Nama</th>
        						<th>Department</th>
        						<th>Jabatan</th>
        						<th>Usia</th>
        						<th>Mulai kerja</th>
        						<th>Gaji</th>
        					</tr>
        				</thead>
        				<tfoot>
        					<tr>
        						<th>NIK</th>
        						<th>Nama</th>
        						<th>Department</th>
        						<th>Jabatan</th>
        						<th>Usia</th>
        						<th>Mulai kerja</th>
        						<th>Gaji</th>
        					</tr>
        				</tfoot>
        			</table>
        		</div>
        	</div>
        </div>
    </div>
</div>
</div>