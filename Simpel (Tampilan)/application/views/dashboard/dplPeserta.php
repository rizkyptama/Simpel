<div class="row">
    <div class="col-lg-12">
        <div class="card card-statistics">
            <div id="cardhead" style="display: none">
                <div class="card-header d-flex">
                    <h3>Cari</h3>          
                    <input type="text" name="cari" class="form-control ml-3" style="width: 250px">   

                    <div class="ml-auto">
                        <button type="button" class="btn btn-info">Tambah</button>                   
                    </div>  
                </div>
            </div>
            <div class="card-body">
                <div class="datatable-wrapper table-responsive">
                    <table id="table1" class="display compact table text-center">
                        <thead class="thead-light text-center">
                            <tr>
                                <th>No</th>
                                <th>Nama Pelatihan</th>
                                <th>Jenis Pelatihan</th>
                                <th>Tanggal Pendaftaran</th>
                                <th>Tanggal Ujian</th>
                                <th>Tanggal Pelatihan</th>
                                <th>Calon Peserta</th>
                                <th>Peserta</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td align="center">1</td>
                                <td align="center">Kendaraan Roda 2</td>
                                <td align="center">Perbengkelan</td>
                                <td align="center">11/29/2021</td>
                                <td align="center">12/05/2021</td>
                                <td align="center">12/08/2021</td>
                                <td align="center">100</td>
                                <td align="center">50</td>
                                <td align="center">
                                    <button class="btn btn-info btn-sm" onclick="showdetail()">Detail</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <table id="table2" class="display compact table table-hover table-striped text-center" style="display: none">
                        <thead class="thead-light text-center">
                            <tr>
                                <th>No</th>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>No. HP</th>
                                <th>Pendidikan Terakhir</th>
                                <th>Jenis Kelamin</th>
                                <th>Kecamatan</th>
                                <th>Status</th>
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
                                <td align="center">Lulus Tahap 1</td>
                                <td align="center">
                                    <button class="btn btn-info btn-sm">Lulus Tahap 1</button>
                                    <button class="btn btn-info btn-sm">Lulus Tahap 2</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function showdetail(){
        $("#table1").hide();
        $("#table2").show();
        $("#cardhead").show();
    }
</script>