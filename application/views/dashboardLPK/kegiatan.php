<div class="row">
    <div class="col-lg-12">
        <div class="card card-statistics">
            <div class="card-header d-flex align-items-center justify-content-between">
                <div class="card-heading">
                    <h4 class="card-title">Data Pelatihan</h4>
                </div>
                <div class="float-right">
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModalTambah">Tambah</button>
                </div>
            </div>
            <div class="card-body">
                <div class="datatable-wrapper table-responsive">
                    <table id="datatable" class="display compact table table-hover table-striped text-center">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Inisiator</th>
                                <th>Pelatihan</th>
                                <th>Jenis Pelatihan</th>
                                <th>Kuota</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>System Architect</td>
                                <td>example@gmail.com</td>
                                <td><span class="badge badge-success">LPK</span></td>
                                <td><span class="badge badge-success">123</span></td>
                                <td><button class="btn btn-warning btn-sm" type="button" data-toggle="modal" data-target="#myModalEdit">Edit</button> <button class="btn btn-danger btn-sm" type="button" onclick="hapus()">Delete</button></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>System Architect</td>
                                <td>example@gmail.com</td>
                                <td><span class="badge badge-success">LPK</span></td>
                                <td><span class="badge badge-success">123</span></td>
                                <td><button class="btn btn-warning btn-sm" type="button" data-toggle="modal" data-target="#myModalEdit">Edit</button> <button class="btn btn-danger btn-sm" type="button" onclick="hapus()">Delete</button></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>System Architect</td>
                                <td>example@gmail.com</td>
                                <td><span class="badge badge-success">LPK</span></td>
                                <td><span class="badge badge-success">123</span></td>
                                <td><button class="btn btn-warning btn-sm" type="button" data-toggle="modal" data-target="#myModalEdit">Edit</button> <button class="btn btn-danger btn-sm" type="button" onclick="hapus()">Delete</button></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>System Architect</td>
                                <td>example@gmail.com</td>
                                <td><span class="badge badge-success">LPK</span></td>
                                <td><span class="badge badge-success">123</span></td>
                                <td><button class="btn btn-warning btn-sm" type="button" data-toggle="modal" data-target="#myModalEdit">Edit</button> <button class="btn btn-danger btn-sm" type="button" onclick="hapus()">Delete</button></td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- The Modal -->
                    <div class="modal" id="myModalEdit">
                      <div class="modal-dialog">
                        <div class="modal-content">

                          <!-- Modal Header -->
                          <div class="modal-header">
                            <h4 class="modal-title">Modal Edit</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Inisiator</label>
                                <select class="form-control">
                                    <option>LPK</option>
                                    <option>BLKLN</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nama Pelatihan</label>
                                <input type="text" name="" class="form-control" placeholder="Nama Pelatihan" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label>Jenis Pelatihan</label>
                                <select class="form-control">
                                    <option>LPK</option>
                                    <option>BLKLN</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Kuota</label>
                                <input type="number" name="" class="form-control" placeholder="Kuota Pelatihan" autocomplete="off">
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                    <div class="form-group">
                                        <label>Tanggal Awal</label>
                                        <input type="date" name="" class="form-control" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                    <div class="form-group">
                                        <label>Tanggal Akhir</label>
                                        <input type="date" name="" class="form-control" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Kategori</label>
                                <select class="form-control">
                                    <option>LPK</option>
                                    <option>BLKLN</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Standar Kompetensi</label>
                                <select class="form-control">
                                    <option>LPK</option>
                                    <option>BLKLN</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <textarea class="form-control"></textarea>
                            </div>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success">Simpan</button>
                        </div>

                    </div>
                </div>
            </div>

            <!-- The Modal -->
            <div class="modal" id="myModalTambah">
              <div class="modal-dialog">
                <div class="modal-content">

                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">Modal Tambah Pelatihan</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="form-group">
                        <label>Inisiator</label>
                        <select class="form-control">
                            <option>LPK</option>
                            <option>BLKLN</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nama Pelatihan</label>
                        <input type="text" name="" class="form-control" placeholder="Nama Pelatihan" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label>Jenis Pelatihan</label>
                        <select class="form-control">
                            <option>LPK</option>
                            <option>BLKLN</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Kuota</label>
                        <input type="number" name="" class="form-control" placeholder="Kuota Pelatihan" autocomplete="off">
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                            <div class="form-group">
                                <label>Tanggal Awal</label>
                                <input type="date" name="" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                            <div class="form-group">
                                <label>Tanggal Akhir</label>
                                <input type="date" name="" class="form-control" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Kategori</label>
                        <select class="form-control">
                            <option>LPK</option>
                            <option>BLKLN</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Standar Kompetensi</label>
                        <select class="form-control">
                            <option>LPK</option>
                            <option>BLKLN</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <textarea class="form-control"></textarea>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">Simpan</button>
                </div>

            </div>
        </div>
    </div>

</div>
</div>
</div>
</div>
</div>