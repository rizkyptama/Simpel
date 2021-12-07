<div class="row">
    <div class="col-lg-12">
        <div class="card card-statistics">
            <div class="card-header d-flex">
                <h3>Cari</h3>          
                <input type="text" name="cari" class="form-control ml-3" style="width: 250px">  
            </div>
            <div class="card-body">
                <div class="datatable-wrapper table-responsive">
                    <table id="datatable1" class="display compact table text-center">
                        <thead class="thead-light text-center">
                            <tr>
                                <th>No</th>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>No. HP</th>
                                <th>Pendidikan Terakhir</th>
                                <th>Jenis Kelamin</th>
                                <th>Kecamatan</th>
                                <th>Nama Pelatihan</th>
                                <th>Tgl Pelatihan</th>
                                <th>Status Pekerjaan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td align="center">1</td>
                            <td align="center">12310283981892</td>
                            <td align="center">Rahmat</td>
                            <td align="center">0819281728</td>
                            <td align="center">SMK</td>
                            <td align="center">Pria</td>
                            <td align="center">Pancoran Mas</td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center">Belum Bekerja</td>
                            <td align="center">
                                <button class="btn btn-info" data-toggle="modal" data-target="#exampleModal">Update Status Pekerjaan</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update Status Pekerjaan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <table class="table table-borderless table-sm w-100">
                <tr>
                    <th>Nama Perusahaan</th>
                    <td><input type="text" name="perusahaan" class="form-control"></td>
                </tr>
                <tr>
                    <th>Tanggal Mulai Bekerja</th>
                    <td><input type="date" name="tglkerja" class="form-control"></td>
                </tr>
            </table>
        </div>
        <!-- <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div> -->
        </div>
    </div>
</div>