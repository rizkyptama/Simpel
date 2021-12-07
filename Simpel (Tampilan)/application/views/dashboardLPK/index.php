<!-- Notification -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-statistics">
            <div class="card-header text-center">
                <h3>Status Laporan Semester Tahun Ini</h3>
            </div>
            <div class="card-body">
                <table class="table table-sm table-borderless text-center">
                    <tr>
                        <td class="bg-info text-white">Semester 1</td>
                        <td></td>
                        <td class="bg-info text-white">Semester 2</td>
                    </tr>
                    <tr>
                        <td class="bg-success text-white" style="height: 100px; font-size: 40px;">Update</td>
                        <td></td>
                        <td class="bg-danger text-white" style="height: 100px; font-size: 40px;">Belum</td>
                    </tr>
                </table>
                <br>
                <div class="datatable-wrapper table-responsive">
                    <table id="table1" class="table table-borderless text-center">
                        <thead class="thead-light">
                            <tr>
                                <th rowspan="2">No</th>
                                <th rowspan="2">Tahun</th>
                                <th colspan="2">Tanggal Lapor</th>
                                <th rowspan="2">Status</th>
                            </tr>
                            <tr>
                                <th>Semester 1</th>
                                <th>Semester 2</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>2021</td>
                                <td>02/06/2021</td>
                                <td></td>
                                <td>Aktif</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->
<!-- begin row -->
<!-- <div class="row">
    <div class="col-sm-12">
        <div class="card card-statistics">
            <div class="row no-gutters">
                <div class="col-xxl-4 col-lg-4 bg-primary">
                    <div class="p-20">
                        <div class="d-flex m-b-10">
                            <p class="mb-0 font-regular text-white font-weight-bold">Total Kegiatan</p>
                            <a class="mb-0 ml-auto font-weight-bold" href="#"><i class="ti ti-more-alt"></i> </a>
                        </div>
                        <div class="d-block d-sm-flex h-100 align-items-center">
                            <div class="statistics mt-3 mt-sm-0 ml-sm-auto text-center text-sm-right">
                                <h3 class="mb-0 text-white"><i class="icon-arrow-up-circle"></i> 15,640</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-4 bg-danger">
                    <div class="p-20">
                        <div class="d-flex m-b-10">
                            <p class="mb-0 font-regular text-white font-weight-bold">Total Peserta</p>
                            <a class="mb-0 ml-auto font-weight-bold" href="#"><i class="ti ti-more-alt"></i> </a>
                        </div>
                        <div class="d-block d-sm-flex h-100 align-items-center">
                            <div class="statistics mt-3 mt-sm-0 ml-sm-auto text-center text-sm-right">
                                <h3 class="mb-0 text-white"><i class="icon-arrow-up-circle"></i> 16,656</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-4 bg-info">
                    <div class="p-20">
                        <div class="d-flex m-b-10">
                            <p class="mb-0 font-regular text-white font-weight-bold">Total Mitra</p>
                            <a class="mb-0 ml-auto font-weight-bold" href="#"><i class="ti ti-more-alt"></i> </a>
                        </div>
                        <div class="d-block d-sm-flex h-100 align-items-center">
                            <div class="statistics mt-3 mt-sm-0 ml-sm-auto text-center text-sm-right">
                                <h3 class="mb-0 text-white"><i class="icon-arrow-up-circle"></i>569</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- <div class="text-center">
    <img height="350" width="250" src="<?php echo base_url('assets/home/images/icon.png')?>" alt="SIMPEL DEPOK" class="text-center">
</div>
    <h1 class="text-center">Selamat Datang di SIMPEL DEPOK</h1>
        

    <?php 
    if ( !isset($laporanlpkblkn->tanggal_lapor) ){
        echo "<p style='color:white' class='bg-danger text-center'>Anda Belum Melakukan Update Laporan ".date('Y')."</p><br>";
        echo "<p class='text-center'><a href=".base_url('DashboardLPK/laporan')."> <button class='btn btn-warning'>Upadate Data</button></a></p>";
    }
    else{

         $mydate= $laporanlpkblkn->tanggal_lapor;
         $month = date("m",strtotime($mydate));

         $myyear= $laporanlpkblkn->tanggal_lapor;
         $year = date("Y",strtotime($myyear));

         $bulansekarang = date('m');
         $tahusekarang = date('Y');

        if ($year != $tahusekarang ) {
            echo "<p style='color:white' class='bg-danger text-center'>Mohon Maaf Anda Belum Laporan Semester 1 Tahun ".date('Y')."</p><br>";
            echo "<p class='text-center'><a href=".base_url('DashboardLPK/laporan')."> <button class='btn btn-warning'>Upadate Data</button></a></p>";
        }
        else if ($year == $tahusekarang && $month < 7 ) {
            echo "<p style='color:white' class='bg-danger text-center'>Mohon Maaf Anda Belum Laporan Semester 2 Tahun ".date('Y')."</p><br>";
            echo "<p class='text-center'><a href=".base_url('DashboardLPK/laporan')."> <button class='btn btn-warning'>Upadate Data</button></a></p>";
        }
    }
    
   
    

    ?> -->
  
<!-- end container-fluid -->