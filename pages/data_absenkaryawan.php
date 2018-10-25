<div class="main-content">   
    <div class="row">
        <div class="col-12">
            <div class="card">
                <header class="card-header">
                    <h4 class="card-title"><strong>Data Absen Karyawan</strong></h4>

                    <div class="btn-toolbar">
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
                </header><!-- /header -->

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="form-group mb-20">
                                <label class="">Karyawan</label>
                                <select name="" data-live-search="true" data-provide="selectpicker" class="form-control" title="Pilih Karyawan">
                                    <option value="">1</option>
                                    <option value="">2</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-2 col-12">
                            <div class="form-group">
                                <label class="d-none d-sm-block">&nbsp;</label>
                                <button type="button" class="btn btn-primary btn-outline d-flex align-items-end">Submit</button>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" cellspacing="0" data-provide="datatables" data-ajax="">
                            <thead>
                                <tr>
                                    <th rowspan="2">No.</th>
                                    <th rowspan="2">NIK</th>
                                    <th rowspan="2">Nama</th>
                                    <th rowspan="2">Gaji Pokok / hari</th>
                                    <th colspan='3'>Tunjangan</th>
                                    <th colspan='2'>Absensi</th>
                                    <th colspan='2'>Lembur</th>
                                    <th rowspan="2">Jumlah Gaji (IDR)</th>
                                    <th rowspan="2">Total Lembur (IDR)</th>
                                    <th rowspan="2">Tunjangan</th>
                                    <th rowspan="2">Total Gaji (IDR)</th>
                                    <th rowspan="2">Potongan Pajak</th>
                                    <th rowspan="2">Potongan BPJS</th>
                                    <th rowspan="2">Potongan terlambat</th>
                                    <th rowspan="2">Gaji diterima (IDR)</th>
                                </tr>
                                <tr>
                                    <td>Makan</td>
                                    <td>Transport</td>
                                    <td>Mesin</td>
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