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
                                <th rowspan="2">No</th>
                                <th rowspan="2">Tahun</th>
                                <th rowspan="2">Nama Pelatihan</th>
                                <th colspan="2">Tanggal Pelatihan</th>
                                <th rowspan="2">Kuota</th>
                                <th rowspan="2">Jml Calon Peserta</th>
                                <th rowspan="2">Jumlah Peserta</th>
                            </tr>
                            <tr>
                                <th>Mulai</th>
                                <th>Akhir</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td align="center">1</td>
                                <td align="center">2021</td>
                                <td align="center">Roda 2</td>
                                <td align="center">03/03/2021</td>
                                <td align="center">07/03/2021</td>
                                <td align="center">50</td>
                                <td align="center">100</td>
                                <td align="center">50</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                <div class="d-flex">
                    <table border="0">
                        <tr>
                            <td>Total Pelatihan</td>
                            <td> : </td>
                            <td><input type="text" name="ttllatih" style="border: 0px" value="1" readonly></td>
                        </tr>
                        <tr>
                            <td>Total Peserta</td>
                            <td> : </td>
                            <td><input type="text" name="ttlpeserta" style="border: 0px" value="50" readonly></td>
                        </tr>
                    </table>
                    <div class="ml-auto">
                        <button class="btn btn-info btn-sm">Download</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>