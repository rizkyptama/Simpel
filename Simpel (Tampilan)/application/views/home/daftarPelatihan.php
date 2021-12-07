<section class="ftco-section mt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-2">
        <h5>Masukkan NIK</h5>
      </div>
      <div class="col-md-5">
        <input type="text" name="crnik" class="form-control w-100">
      </div>
      <div class="col-md-2">
        <button class="btn btn-primary">Cek</button>
      </div>
    </div>
    <br>
    <h6>Ket : Peserta Pelatihan harus memiliki kartu AK 1, apabila belum memiliki kartu AK 1 silahkan klik link berikut : <br> <a href="https://bkol.depok.go.id" target="_blank">Https://bkol.depok.go.id</a></h6>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header d-flex align-items-center justify-content-between bg-primary text-white">
            Data Pencari Kerja
          </div>
          <div class="card-body">
            <div class="container row">
              <div class="col-md-4 text-right mb-3">
                *Nomor KTP
              </div>
              <div class="col-md-8 mb-3">
                <input type="text" name="noktp" class="form-control" disabled>
              </div>
              <div class="col-md-4 text-right mb-3">
                *Nama Pencari Kerja
              </div>
              <div class="col-md-8 mb-3">
                <input type="text" name="pencaker" class="form-control" disabled>
              </div>
              <div class="col-md-4 text-right mb-3">
                *Jenis Kelamin
              </div>
              <div class="col-md-8 mb-3">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="jk" id="jk1" value="L" checked>
                  <label class="form-check-label" for="jk1">Pria</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="jk" id="jk2" value="P">
                  <label class="form-check-label" for="jk2">Wanita</label>
                </div>
              </div>
              <div class="col-md-4 text-right mb-3">
                *Tempat Lahir
              </div>
              <div class="col-md-8 mb-3">
                <input type="text" name="tempatlahir" class="form-control" disabled>
              </div>
              <div class="col-md-4 text-right mb-3">
                *Tanggal Lahir
              </div>
              <div class="col-md-8 mb-3">
                <input type="date" name="tgllahir" class="form-control" disabled>
              </div>
              <div class="col-md-4 text-right mb-3">
                *Email
              </div>
              <div class="col-md-8 mb-3">
                <input type="email" name="email" class="form-control">
              </div>
              <div class="col-md-4 text-right mb-3">
                *Telepon
              </div>
              <div class="col-md-8 mb-3">
                <input type="text" name="telepon" class="form-control">
              </div>
              <div class="col-md-4 text-right mb-3">
                *Kecamatan
              </div>
              <div class="col-md-8 mb-3">
                <select class="form-control" name="kecamatan">
                  <option value=''>-Pilih Kecamatan-</option>
                </select>
              </div>
              <div class="col-md-4 text-right mb-3">
                *Kelurahan
              </div>
              <div class="col-md-8 mb-3">
                <select class="form-control" name="kelurahan">
                  <option value=''>-Pilih Kelurahan-</option>
                </select>
              </div>
              <div class="col-md-4 text-right mb-3">
                *Alamat
              </div>
              <div class="col-md-8 mb-3">
                <textarea class="form-control" name="alamat"></textarea>
              </div>
              <div class="col-md-4 text-right mb-3">
                Kode Pos
              </div>
              <div class="col-md-8 mb-3">
                <input type="number" name="kodepos" class="form-control">
              </div>
              <div class="col-md-4 text-right mb-3">
                Kewarganegaraan
              </div>
              <div class="col-md-8 mb-3">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="kewarganegaraan" id="kewarganegaraan1" value="WNI" checked>
                  <label class="form-check-label" for="kewarganegaraan1">WNI</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="kewarganegaraan" id="kewarganegaraan2" value="WNA">
                  <label class="form-check-label" for="kewarganegaraan2">WNA</label>
                </div>
              </div>
              <div class="col-md-4 text-right mb-3">
                *Agama
              </div>
              <div class="col-md-8 mb-3">
                <select class="form-control" name="agama">
                  <option value=''>-Pilih Agama-</option>
                </select>
              </div>
              <div class="col-md-4 text-right mb-3">
                *Status Pernikahan
              </div>
              <div class="col-md-8 mb-3">
                <select class="form-control" name="statusnikah">
                  <option value=''>-Pilih Status-</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <br>
        <div class="card">
          <div class="card-header d-flex align-items-center justify-content-between bg-primary text-white">
            Data Pendidikan
          </div>
          <div class="card-body">
            <div class="container row">
              <div class="col-md-4 text-right mb-3">
                *Pendidikan Terakhir
              </div>
              <div class="col-md-8 mb-3">
                <select class="form-control" name="pendidikan">
                  <option value=''>-Pilih Status Pendidikan-</option>
                </select>
              </div>
              <div class="col-md-4 text-right mb-3">
                *Jurusan
              </div>
              <div class="col-md-8 mb-3">
                <select class="form-control" name="jurusan">
                  <option value=''>-Pilih Jurusan-</option>
                </select>
              </div>
              <div class="col-md-4 text-right mb-3">
                *Keterampilan
              </div>
              <div class="col-md-8 mb-3">
                <input type="text" name="keterampilan" class="form-control">
              </div>
              <div class="col-md-4 text-right mb-3">
                *NEM/IPK
              </div>
              <div class="col-md-8 mb-3">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="ipk" id="ipk1" value="NEM">
                  <label class="form-check-label" for="ipk1">NEM</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="ipk" id="ipk2" value="IPK">
                  <label class="form-check-label" for="ipk2">IPK</label>
                </div>
              </div>
              <div class="col-md-4 text-right mb-3">
                *Nilai
              </div>
              <div class="col-md-8 mb-3">
                <input type="text" name="nilai" class="form-control">
              </div>
              <div class="col-md-4 text-right mb-3">
                Tahun Lulus
              </div>
              <div class="col-md-8 mb-3">
                <select class="form-control" name="tahunlulus">
                  <option value='2021'>2021</option>
                </select>
              </div>
              <div class="col-md-4 text-right mb-3">
                Tinggi Badan
              </div>
              <div class="col-md-8 mb-3">
                <div class="input-group mb-2">
                  <input type="text" class="form-control" id="tinggibadan">
                  <div class="input-group-prepend">
                    <div class="input-group-text">cm</div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 text-right mb-3">
                Berat Badan
              </div>
              <div class="col-md-8 mb-3">
                <div class="input-group mb-2">
                  <input type="text" class="form-control" id="beratbadan">
                  <div class="input-group-prepend">
                    <div class="input-group-text">Kg</div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 text-right mb-3">
                Keterangan
              </div>
              <div class="col-md-8 mb-3">
                <textarea class="form-control" name="keterangan"></textarea>
              </div>
            </div>
          </div>
        </div>
        <br>
        <div class="float-right">
          <button class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </div>
  </div>
</section>