<div class="row">
    <div class="col-lg-12">
        <div class="card card-statistics">
            <div class="card-header d-flex">
                <h3>Cari</h3>          
                <input type="text" name="cari" class="form-control ml-3" style="width: 250px">   

                <div class="ml-auto">
                    <button type="button" class="btn btn-info">Tambah</button>                   
                </div>  
            </div>
            <div class="card-body">
                <div class="datatable-wrapper table-responsive">
                    <table id="table1" class="display compact table text-center">
                        <thead class="thead-light text-center">
                            <tr>
                                <th>No</th>
                                <th>Nama LPK</th>
                                <th>Alamat</th>
                                <th>Email</th>
                                <th>No. Tlp</th>
                                <th>No. Ijin</th>
                                <th>Tgl Ijin</th>
                                <th>Jenis LPK</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td align="center">1</td>
                                <td align="center">asdasd</td>
                                <td align="center">asdads</td>
                                <td align="center">asdad</td>
                                <td align="center">asdasd</td>
                                <td align="center">asdasda</td>
                                <td align="center">asdads</td>
                                <td align="center">Pemerintah</td>
                                <td align="center">Aktif</td>
                                <td align="center">
                                    <button class="btn btn-warning btn-sm">Suspen</button>
                                    <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModalLihat">Detail</button>
                                    <button class="btn btn-danger btn-sm">Hapus</button>
                                </td>
                            </tr>
                            <tr>
                                <td align="center">2</td>
                                <td align="center">asdasd</td>
                                <td align="center">asdads</td>
                                <td align="center">asdad</td>
                                <td align="center">asdasd</td>
                                <td align="center">asdasda</td>
                                <td align="center">asdads</td>
                                <td align="center">Swasta</td>
                                <td align="center">Suspend</td>
                                <td align="center">
                                    <button class="btn btn-info btn-sm">Aktivasi</button>
                                    <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModalLihat">Detail</button>
                                    <button class="btn btn-danger btn-sm">Hapus</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- The Modal -->
<div class="modal" id="myModalLihat">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Detail </h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <img class="p-20" src="<?= base_url();?>assets/upload/logo/logo1.png" alt="" style="width: 100%; max-height: 450px">
            <div class="modal-body">
                <div class="tab tab-border">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active show" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true"> <i class="fa fa-home"></i> Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pengurus-tab" data-toggle="tab" href="#pengurus" role="tab" aria-controls="pengurus" aria-selected="false"><i class="fa fa-user"></i> Pengurus </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="detail-tab" data-toggle="tab" href="#detail" role="tab" aria-controls="detail" aria-selected="false"><i class="fa fa-list"></i> Detail </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="form-group">
                                <label>No. Izin</label>
                                <input type="text" value="" class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label>Tanggal izin</label>
                                <input type="date" value="" class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label>Nama Lembaga</label>
                                <input type="text" value="" class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" autocomplete="off"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Telepon</label>
                                <input type="text" value="" class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" value="" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pengurus" role="tabpanel" aria-labelledby="pengurus-tab">
                            <div class="form-group">
                                <label>Nama Direktur Lembaga</label>
                                <input type="text" value="" class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label>No Direktur Lembaga</label>
                                <input type="text" value="" class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label>Nama Penanggung Jawab Lembaga</label>
                                <input type="text" value="" class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label>Jabatan Penanggung Jawab Lembaga</label>
                                <input type="text" value="" class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label>No Penanggung Jawab Lembaga</label>
                                <input type="text" value="" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="tab-pane fade" id="detail" role="tabpanel" aria-labelledby="detail-tab">
                            <div class="accordion" id="accordionsimplefill">
                                <div class="mb-2 acd-group">
                                    <div class="card-header bg-info rounded-0">
                                        <h5 class="mb-0">
                                            <a href="#collapse" class="btn-block text-white text-left acd-heading collapsed" data-toggle="collapse">Lembaga</a>
                                        </h5>
                                    </div>
                                    <div id="collapse" class="collapse" data-parent="#accordionsimplefill">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Jenis Kelembagaan</label>
                                                <select class="form-control" autocomplete="off">
                                                    <!-- <option <?php if ($row->jenis == 'Pemerintah') {echo 'selected';} ?>>Pemerintah</option>
                                                    <option <?php if ($row->jenis == 'Swasta') {echo 'selected';} ?>>Swasta</option>
                                                    <option <?php if ($row->jenis == 'Perusahaan') {echo 'selected';} ?>>Perusahaan</option> -->
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Ruang Lingkup Lembaga</label>
                                                <input type="text" value="" class="form-control" autocomplete="off">
                                            </div>
                                            <div class="form-group">
                                                <label>Status Akreditasi</label>
                                                <input type="text" value="" class="form-control" autocomplete="off">
                                            </div>
                                            <div class="form-group">
                                                <label>No. Akreditasi</label>
                                                <input type="text" value="" class="form-control" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2 acd-group">
                                    <div class="card-header bg-info rounded-0">
                                        <h5 class="mb-0">
                                            <a href="#collapse1" class="btn-block text-white text-left acd-heading collapsed" data-toggle="collapse">Karyawan</a>
                                        </h5>
                                    </div>
                                    <div id="collapse1" class="collapse" data-parent="#accordionsimplefill">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Laki - Laki</label>
                                                        <input type="number" value="" class="form-control" autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Perempuan</label>
                                                        <input type="number" value="" class="form-control" autocomplete="off">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2 acd-group">
                                    <div class="card-header rounded-0 bg-info">
                                        <h5 class="mb-0">
                                            <a href="#collapse2" class="btn-block text-white text-left acd-heading collapsed" data-toggle="collapse">Tenaga Kerja Tetap</a>
                                        </h5>
                                    </div>
                                    <div id="collapse2" class="collapse" data-parent="#accordionsimplefill">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Laki - Laki</label>
                                                        <input type="number" value="" class="form-control" autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Perempuan</label>
                                                        <input type="number" value="" class="form-control" autocomplete="off">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2 acd-group border-bottom-0">
                                    <div class="card-header rounded-0 bg-info">
                                        <h5 class="mb-0">
                                            <a href="#collapse3" class="btn-block text-white text-left acd-heading collapsed" data-toggle="collapse">Tenaga Kerja Tidak Tetap</a>
                                        </h5>
                                    </div>
                                    <div id="collapse3" class="collapse" data-parent="#accordionsimplefill">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Laki - Laki</label>
                                                        <input type="number" value="" class="form-control" autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Perempuan</label>
                                                        <input type="number" value="" class="form-control" autocomplete="off">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2 acd-group border-bottom-0">
                                    <div class="card-header rounded-0 bg-info">
                                        <h5 class="mb-0">
                                            <a href="#collapse4" class="btn-block text-white text-left acd-heading collapsed" data-toggle="collapse">Instruktur Tetap</a>
                                        </h5>
                                    </div>
                                    <div id="collapse4" class="collapse" data-parent="#accordionsimplefill">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Laki - Laki</label>
                                                        <input type="number" value="" class="form-control" autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Perempuan</label>
                                                        <input type="number" value="" class="form-control" autocomplete="off">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2 acd-group border-bottom-0">
                                    <div class="card-header rounded-0 bg-info">
                                        <h5 class="mb-0">
                                            <a href="#collapse5" class="btn-block text-white text-left acd-heading collapsed" data-toggle="collapse">Instruktur Tidak Tetap</a>
                                        </h5>
                                    </div>
                                    <div id="collapse5" class="collapse" data-parent="#accordionsimplefill">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Laki - Laki</label>
                                                        <input type="number" value="" class="form-control" autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Perempuan</label>
                                                        <input type="number" value="" class="form-control" autocomplete="off">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2 acd-group border-bottom-0">
                                    <div class="card-header rounded-0 bg-info">
                                        <h5 class="mb-0">
                                            <a href="#collapse6" class="btn-block text-white text-left acd-heading collapsed" data-toggle="collapse">Asesor Kompetensi</a>
                                        </h5>
                                    </div>
                                    <div id="collapse6" class="collapse" data-parent="#accordionsimplefill">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Laki - Laki</label>
                                                        <input type="number" value="" class="form-control" autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Perempuan</label>
                                                        <input type="number" value="" class="form-control" autocomplete="off">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2 acd-group border-bottom-0">
                                    <div class="card-header rounded-0 bg-info">
                                        <h5 class="mb-0">
                                            <a href="#collapse7" class="btn-block text-white text-left acd-heading collapsed" data-toggle="collapse">Asesor Instruksi Asing</a>
                                        </h5>
                                    </div>
                                    <div id="collapse7" class="collapse" data-parent="#accordionsimplefill">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Laki - Laki</label>
                                                        <input type="number" value="" class="form-control" autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Perempuan</label>
                                                        <input type="number" value="" class="form-control" autocomplete="off">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer text-right">
                <button class="btn btn-info">Simpan</button>
            </div>
        </div>
    </div>
</div>