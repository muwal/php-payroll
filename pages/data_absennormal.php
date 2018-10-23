<div class="main-content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h4 class="card-title"><strong>Data Absen Jam Normal</strong></h4>

                <div class="card-body">
                    <div class="flexbox mb-20">

                        <div class="btn-toolbar">

                            <div class="btn-group btn-group-sm ml-2 d-sm-flex">
                                <button class="btn dropdown-toggle" data-toggle="dropdown">Export</button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">XLSX</a>
                                    <a class="dropdown-item" href="#">PDF</a>
                                </div>
                            </div>

                            <div class="btn-group btn-group-sm ml-2 d-none d-sm-flex">
                                <button class="btn" type="button" data-toggle="modal" data-target="#modal-import">Import</button>
                                <!-- <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">XLSX</a>
                                </div> -->
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive-md">
                        <table class="table table-striped table-bordered" cellspacing="0" data-provide="datatables" data-ajax="">
                            <thead>
                                <tr>
                                    <th rowspan="2">No. Absen</th>
                                    <th rowspan="2">NIK</th>
                                    <th rowspan="2">Nama Karyawan</th>
                                    <th rowspan="2">Durasi Kerja</th>
                                    <th colspan='2'>Jam Normal</th>
                                    <th colspan='2'>Jam Lembur</th>
                                </tr>
                                <tr>
                                    <td>Check In</td>
                                    <td>Break In</td>
                                    <td>Check In</td>
                                    <td>Break In</td>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal modal-right fade" id="modal-import" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Import Data Absen</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <p>Pilih file <span class="text-info">(.xlsx)</span></p>
                        <div class="input-group form-type-line file-group">
                          <input type="text" class="form-control file-value" placeholder="Pilih file..." readonly>
                          <input type="file" multiple>
                          <span class="input-group-append">
                            <button class="btn btn-light file-browser" type="button"><i class="fa fa-upload"></i></button>
                        </span>
                    </div>
                </div>

                </div>
            </div>
            <div class="modal-footer modal-footer-uniform">
                <button type="button" class="btn btn-bold btn-pure btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-bold btn-pure btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>