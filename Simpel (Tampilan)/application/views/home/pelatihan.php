<section class="ftco-section mt-5">
 <div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="row ftco-animate" id="appendpelatihan">
        <?php foreach ($pelatihan as $row) { ?>
          <div class="col-lg-12 col-md-12 col-sm-12 col-12 mb-3 removepelatihan">
            <img src="<?= base_url(); ?>assets/img/gold.png">
            <div class="card">
              <div class="card-header d-flex align-items-center justify-content-between">
                <a href="<?= base_url(); ?>Home/pelatihanDetail/<?= $row->kode_pelatihan; ?>"><h5 class="text-info"><?= $row->nama;?></h5></a>
                <div class="float-right">
                  <?php $date = date('Y-m-d'); if ($date > $row->tanggal_berakhir_daftar) { ?> <span class="badge badge-danger">Expired</span><?php } ?>
                </div>
              </div>
              <div class="card-body">
                <form class="form-horizontal">
                  <span>Kuota : <?= $row->kuota ?></span> <br>
                  <span>Standar Kompetensi : <?= $row->standar_kompetensi ?> Peserta</span> <br>
                  <span>Keterangan : <?= $row->keterangan ?></span> <br>
                  <span>Tanggal Mulai Pelatihan : <?= $row->tanggal_mulai_pelatihan ?></span> <br>
                  <span>Tanggal Berakhir Pelatihan : <?= $row->tanggal_berakhir_pelatihan ?></span> <br>
                </form>
                <!-- <a href="<?= base_url(); ?>ujianonline" class="btn btn-info float-left">Tanggal Ujian</a> -->
                <a href="javascript:;" class="btn btn-info float-right">Daftar</a>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
    <div class="col-md-6">
      <div class="float-right">
        <h5 class="text-info">Pelatihan Lainnya</h5>
        <?php foreach ($pelatihan as $row) { ?>
        <div class="card mb-3">
          <div class="card-body">
            <h6 class="text-info"><?= $row->nama;?></h6>
            <span style="font-size: 15px">Mulai Pelatihan : <?= $row->tanggal_mulai_pelatihan ?></span><br>
            <span style="font-size: 15px">Berakhir Pelatihan : <?= $row->tanggal_berakhir_pelatihan ?></span>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
</div>
</div>
</section>