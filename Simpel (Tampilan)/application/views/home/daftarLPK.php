<section class="ftco-section mt-5">
  <div class="container">
    <div class="row">
      <div class="col-12">
          <div class="form-group">
              <label class="control-label">Jenis LPK</label><br>
              <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="customRadioInline1" name="tipe" class="custom-control-input" value="LPK" required="" autocomplete="off" >
                  <label class="custom-control-label" for="customRadioInline1">LPK Swasta</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="customRadioInline2" name="tipe" class="custom-control-input" value="BLKLN" required="" autocomplete="off" >
                  <label class="custom-control-label" for="customRadioInline2">BLKLN</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="customRadioInline6" name="tipe" class="custom-control-input" value="BLKLN" required="" autocomplete="off" >
                  <label class="custom-control-label" for="customRadioInline6">BLK Komunitas</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="customRadioInline7" name="tipe" class="custom-control-input" value="BLKLN" required="" autocomplete="off" >
                  <label class="custom-control-label" for="customRadioInline7">BLK Pemerintah</label>
              </div>  
          </div>
      </div>
      <fieldset class="col-md-12 mb-3">
          <legend>Akun Login</legend>
          <div class="col-12">
              <div class="form-group">
                  <label class="control-label">Username <span style="color:red" title="Wajib Diisi">*</span></label>
                  <input type="text" name="username" class="form-control" placeholder="Username" required="" autocomplete="off"/>
              </div>
          </div>
          <div class="col-12">
              <div class="form-group">
                  <label class="control-label">Password <span style="color:red" title="Wajib Diisi">*</span></label>
                  <input type="password" name="password" class="form-control" placeholder="*********" required="" autocomplete="off" />
              </div>
          </div>
      </fieldset>
      <fieldset class="col-md-12 mb-3">
          <legend>Data LPK/BLKLN</legend>
          <div class="col-12">
              <div class="form-group">
                  <label class="control-label">Nama LPK/BLKLN <span style="color:red" title="Wajib Diisi">*</span></label>
                  <input type="text" name="nama" class="form-control" placeholder="Nama LPK/BLKLN" required="" autocomplete="off"/>
              </div>
          </div>
          <div class="col-12">
              <div class="form-group">
                  <label class="control-label">Alamat <span style="color:red" title="Wajib Diisi">*</span></label>
                  <textarea class="form-control" name="alamat" required="" autocomplete="off"></textarea>
              </div>
          </div>
          <div class="col-12">
              <div class="form-group">
                  <label class="control-label">Kelurahan <span style="color:red" title="Wajib Diisi">*</span></label>
                  <select class="form-control" name="kelurahan">
                    <option value=''>-Pilih Kelurahan-</option>
                  </select>
              </div>
          </div>
          <div class="col-12">
              <div class="form-group">
                  <label class="control-label">Kecamatan <span style="color:red" title="Wajib Diisi">*</span></label>
                  <select class="form-control" name="kecamatan">
                    <option value=''>-Pilih Kecamatan-</option>
                  </select>
              </div>
          </div>
          <div class="col-12">
              <div class="form-group">
                  <label class="control-label">No. Telepon <span style="color:red" title="Wajib Diisi">*</span></label>
                  <input type="text" name="no_telepon" class="form-control" placeholder="No. Telepon" required="" autocomplete="off"/>
              </div>
          </div>
          <div class="col-12">
              <div class="form-group">
                  <label class="control-label">Email <span style="color:red" title="Wajib Diisi">*</span></label>
                  <input type="email" name="email" class="form-control" placeholder="Email" required="" autocomplete="off"/>
              </div>
          </div>
          <div class="col-12">
              <div class="form-group">
                  <label class="control-label">No. Izin </label>
                  <input type="text" name="no_izin" class="form-control" placeholder="No. Izin"  autocomplete="off"/>
              </div>
          </div>
          <div class="col-12">
              <div class="form-group">
                  <label class="control-label">Tanggal Izin </label>
                  <input type="date" name="tanggal_izin" class="form-control" autocomplete="off" />
              </div>
          </div>
          <div class="col-12">
              <div class="form-group">
                  <label class="control-label">Jenis </label><br>
                  <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" id="customRadioInline3" name="jenis" class="custom-control-input" value="Pemerintah" autocomplete="off" required >
                      <label class="custom-control-label" for="customRadioInline3">Pemerintah</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" id="customRadioInline4" name="jenis" class="custom-control-input" value="Swasta" autocomplete="off" required>
                      <label class="custom-control-label" for="customRadioInline4">Swasta</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" id="customRadioInline5" name="jenis" class="custom-control-input" value="Perusahaan" autocomplete="off" required>
                      <label class="custom-control-label" for="customRadioInline5">Perusahaan</label>
                  </div>
              </div>
          </div>
          <div class="col-12">
              <div class="form-group">
                  <label class="control-label">Status Akreditas </label>
                  <input type="text" name="status_akreditas" class="form-control" autocomplete="off" />
              </div>
          </div>
          <div class="col-12">
              <div class="form-group">
                  <label class="control-label">No. Akreditas </label>
                  <input type="text" name="no_akreditas" class="form-control" autocomplete="off" />
              </div>
          </div>
          <div class="col-12">
              <div class="form-group">
                  <label class="control-label">Ruang Lingkup </label>
                  <input type="text" name="ruang_lingkup" class="form-control" autocomplete="off" />
              </div>
          </div>
          <div class="col-12">
              <div class="form-group">
                  <label>Logo Perusahaan</label>
                  <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile" name="logo" autocomplete="off" required> 
                      <label class="custom-file-label" for="customFile">Pilih File (Ukuran Disarankan 349x200 pixel)</label>
                  </div>
              </div>
          </div>
      </fieldset>
      <fieldset class="col-md-12 mb-3">
          <legend>Data Pimpinan</legend>
          <div class="col-12">
              <div class="form-group">
                  <label class="control-label">Nama Pimpinan </label>
                  <input type="text" name="nama_pimpinan" class="form-control" placeholder="Nama Pimpinan" autocomplete="off" />
              </div>
          </div>
          <div class="col-12">
              <div class="form-group">
                  <label class="control-label">No. Telepon Pimpinan</label>
                  <input type="text" name="no_telepon_pimpinan" class="form-control" placeholder="(+62) ..." autocomplete="off" />
              </div>
          </div>
          <div class="col-12">
              <div class="form-group">
                  <label class="control-label">Nama Penanggung Jawab </label>
                  <input type="text" name="nama_pj" class="form-control" placeholder="Nama Pimpinan" autocomplete="off" />
              </div>
          </div>
          <div class="col-12">
              <div class="form-group">
                  <label class="control-label">Jabatan Penanggung Jawab </label>
                  <input type="text" name="jabatan_pj" class="form-control" placeholder="Nama Pimpinan" autocomplete="off" />
              </div>
          </div>
          <div class="col-12">
              <div class="form-group">
                  <label class="control-label">No. Telepon Penanggung Jawab </label>
                  <input type="text" name="no_telepon_pj" class="form-control" placeholder="(+62) ..." autocomplete="off" />
              </div>
          </div>
      </fieldset>
      <fieldset class="col-md-12 mb-3">
          <legend>Data Pengurus</legend>
          <table class="table table-striped table-bordered">
              <center>
                  <tr>
                      <!-- <th scope="col" rowspan="2">No.</th> -->
                      <th scope="col" rowspan="2" class="align-middle">Tipe</th>
                      <th scope="col" colspan="2">Jenis Kelamin</th>
                  </tr>
                  <tr>
                      <th scope="col">Laki-laki</th>
                      <th scope="col">Perempuan</th>
                  </tr>
                  <tr>
                      <td>Karyawan</td>
                      <td><input type="number" name="karyawan_laki" class="form-control" value="0" autocomplete="off" /></td>
                      <td><input type="number" name="karyawan_perempuan" class="form-control" value="0" autocomplete="off" /></td>
                  </tr>
                  <tr>
                      <td>Tenaga Pelatihan Tetap</td>
                      <td><input type="number" name="tpt_laki" class="form-control" value="0" autocomplete="off" /></td>
                      <td><input type="number" name="tpt_perempuan" class="form-control" value="0" autocomplete="off" /></td>
                  </tr>
                  <tr>
                      <td>Tenaga Pelatihan Tidak Tetap</td>
                      <td><input type="number" name="tptt_laki" class="form-control" value="0" autocomplete="off" /></td>
                      <td><input type="number" name="tptt_perempuan" class="form-control" value="0" autocomplete="off" /></td>
                  </tr>
                  <tr>
                      <td>Instruktur Tetap</td>
                      <td><input type="number" name="it_laki" class="form-control" value="0" autocomplete="off" /></td>
                      <td><input type="number" name="it_perempuan" class="form-control" value="0" autocomplete="off" /></td>
                  </tr>
                  <tr>
                      <td>Instruktur Tidak Tetap</td>
                      <td><input type="number" name="itt_laki" class="form-control" value="0" autocomplete="off" /></td>
                      <td><input type="number" name="itt_perempuan" class="form-control" value="0" autocomplete="off" /></td>
                  </tr>
                  <tr>
                      <td>Asesor Kompetensi</td>
                      <td><input type="number" name="ak_laki" class="form-control" value="0" autocomplete="off" /></td>
                      <td><input type="number" name="ak_perempuan" class="form-control" value="0" autocomplete="off" /></td>
                  </tr>
                  <tr>
                      <td>Instruktur/Asesor WNA</td>
                      <td><input type="number" name="aw_laki" class="form-control" value="0" autocomplete="off" /></td>
                      <td><input type="number" name="aw_perempuan" class="form-control" value="0" autocomplete="off" /></td>
                  </tr>
              </center>
          </table>
      </fieldset>
      <div class="col-md-12 text-right">
        <button class="btn btn-primary">SIMPAN</button>
      </div>
    </div>
  </div>
</section>