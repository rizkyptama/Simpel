<div class="row">
    <div class="col-lg-12">
        <div class="card card-statistics">
            <div class="card-header d-flex">
                <h4>Info Dinas</h4> 
                <div class="ml-auto">
                    <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal">Tambah</button>
                </div>
            </div>
            <div class="card-body">
                <div class="datatable-wrapper table-responsive">
                    <table id="datatable1" class="display compact table text-center">
                        <thead class="thead-light text-center">
                            <tr>
                                <th>No</th>
                                <th>Tgl</th>
                                <th>Judul Berita</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td align="center">1</td>
                            <td align="center">03/08/2021</td>
                            <td align="center">Pengumuman Hasil Seleksi</td>
                            <td align="center">Aktif</td>
                            <td align="center">
                                <button class="btn btn-info">Aktivasi</button>
                                <button class="btn btn-success">Detail</button>
                                <button class="btn btn-danger">Hapus</button>
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
            <h5 class="modal-title" id="exampleModalLabel">Tambah Info</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="d-block">
                <label>Judul</label>
                <input type="text" name="judul" class="form-control">
                <br>
                <label>Deskripsi</label>
                <textarea class="form-control" name="desk" rows="5"></textarea>
                <br>
                <label>Foto</label>
                <input type="file" name="foto" class="form-control">
                <p>Gambar JPG/PNG Max. 2Mb</p>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-success">Simpan</button>
        </div>
        </div>
    </div>
</div>