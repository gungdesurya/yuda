<div class="container">
  <h4>Daftar Pelamar</h4>
  <br>
  <div class="card">
    <div class="row">
      <div class="col s12">
        <ul class="tabs">
          <li class="tab col s3"><a class="deep-orange-text text-darken-1" href="#test1">Informasi Umum</a></li>
          <li class="tab col s3"><a class="deep-orange-text text-darken-1" href="#test2">Pendidikan Formal</a></li>
          <li class="tab col s3"><a class="deep-orange-text text-darken-1" href="#test3">Pendidikan Non-Formal</a></li>
          <li class="tab col s3"><a class="deep-orange-text text-darken-1" href="#test4">Pekerjaan</a></li>
        </ul>
      </div>
      <div id="test1" class="col s12" style="padding: 24px">
        <form action="#" class="row">
          <div class="input-field col s12">
            <input id="email" type="email" name="email">
            <label for="email">Email</label>
          </div>

          <div class="input-field col s12 m6">
            <input id="password" type="password" name="password">
            <label for="password">Password</label>
          </div>

          <div class="input-field col s12 m6">
            <input id="confirm_password" type="password" name="confirm_password">
            <label for="confirm_password">Ulangi Password</label>
          </div>

          <div class="input-field col s12">
            <input id="nomor_hp" type="text" name="nomor_hp">
            <label for="nomor_hp">Nomor HP</label>
          </div>

          <div class=""></div>
          <label for="foto">Foto</label>
          <div class="input-field">
            <input id="foto" type="file" name="foto">
          </div>
          <br>

          <div class="input-field col s12 m6">
            <input id="nama" type="text" name="nama">
            <label for="nama">Nama</label>
          </div>

          <div class="input-field col s12 m6">
            <input id="nomor_ktp" type="text" name="nomor_ktp">
            <label for="nomor_ktp">Nomor KTP</label>
          </div>

          <div class="input-field col s12 m6">
            <select name="agama">
              <option value="">Hindu</option>
              <option value="">Islam</option>
              <option value="">Kristen Katolik</option>
              <option value="">Kristen Protestan</option>
              <option value="">Budha</option>
              <option value="">Konghuchu</option>
            </select>
            <label>Agama</label>
          </div>

          <div class="input-field col s12 m6">
            <input id="tempat_lahir" type="date" name="tempat_lahir">
            <label for="tempat_lahir">Tempat Lahir</label>
          </div>

          <div class="col s12">
            <label>Jenis Kelamin</label>
            <div>
              <label>
                <input name="jk" type="radio" checked />
                <span>Laki-laki</span>
              </label>
              <label>
                <input name="jk" type="radio" />
                <span>Perempuan</span>
              </label>
            </div>
          </div>

          <div class="input-field col s12 m3">
            <input id="provinsi" type="text" name="provinsi">
            <label for="provinsi">Provinsi</label>
          </div>

          <div class="input-field col s12 m3">
            <input id="kabupaten" type="text" name="kabupaten">
            <label for="kabupaten">Kabupaten</label>
          </div>

          <div class="input-field col s12 m3">
            <input id="kecamatan" type="text" name="kecamatan">
            <label for="kecamatan">Kecamatan</label>
          </div>

          <div class="input-field col s12 m3">
            <input id="kelurahan" type="text" name="kelurahan">
            <label for="kelurahan">Kelurahan</label>
          </div>

          <div class="input-field col s12 m8">
            <textarea id="alamat" name="alamat" class="materialize-textarea"></textarea>
            <label for="alamat">Alamat</label>
          </div>

          <div class="input-field col s12 m4">
            <input id="kode_pos" type="number" name="kode_pos">
            <label for="kode_pos">Kode Pos</label>
          </div>

          <div class="col s12">
            <input type="submit" value="Post" class="btn deep-purple">
          </div>
        </form>
      </div>

      <div id="test2" class="col s12" style="padding: 24px">
        <form action="">
          <div class="row">
            <div class="col s12">
              <h6><b>SD</b></h6>
            </div>
            <div class="input-field col s12 m4">
              <input id="first_name" type="text" class="validate">
              <label for="first_name">Jurusan</label>
            </div>

            <div class="input-field col s12 m4">
              <select>
                <option value="" disabled selected>Pilih Tahun</option>
                <option value="1">2010</option>
                <option value="2">2011</option>
                <option value="3">2012</option>
              </select>
              <label for="first_name">Tahun</label>
            </div>

            <div class="col s12 m4">
              <label for="foto">Ijazah</label>
              <div class="input-field">
                <input id="foto" type="file" name="foto">
              </div>

            </div>

            <div class="col s12">
              <h6><b>SMP</b></h6>
            </div>
            <div class="input-field col s12 m4">
              <input id="first_name" type="text" class="validate">
              <label for="first_name">Jurusan</label>
            </div>

            <div class="input-field col s12 m4">
              <select>
                <option value="" disabled selected>Pilih Tahun</option>
                <option value="1">2010</option>
                <option value="2">2011</option>
                <option value="3">2012</option>
              </select>
              <label for="first_name">Tahun</label>
            </div>

            <div class="col s12 m4">
              <label for="foto">Ijazah</label>
              <div class="input-field">
                <input id="foto" type="file" name="foto">
              </div>
            </div>

            <div class="col s12">
              <h6><b>SMA/SMK</b></h6>
            </div>
            <div class="input-field col s12 m4">
              <input id="first_name" type="text" class="validate">
              <label for="first_name">Jurusan</label>
            </div>

            <div class="input-field col s12 m4">
              <select>
                <option value="" disabled selected>Pilih Tahun</option>
                <option value="1">2010</option>
                <option value="2">2011</option>
                <option value="3">2012</option>
              </select>
              <label for="first_name">Tahun</label>
            </div>

            <div class="col s12 m4">
              <label for="foto">Ijazah</label>
              <div class="input-field">
                <input id="foto" type="file" name="foto">
              </div>
            </div>
          </div>

        </form>
      </div>
      <div id="test3" class="col s12" style="padding: 24px">
        <h5>Pendidikan Non Formal</h5>
        <br>
        <form action="">
          <div class="form-group">
            <div class="row">
              <div class="col s12 m3">
                <label>
                  <input name="jk" class="filled-in" type="checkbox" />
                  <span>Bisa Nyetir</span>
                </label>
              </div>
              <div class="col s12 m3">
                <label>
                  <input name="jk" class="filled-in" type="checkbox" />
                  <span>Bisa Nyetir</span>
                </label>
              </div>
              <div class="col s12 m3">
                <label>
                  <input name="jk" class="filled-in" type="checkbox" />
                  <span>Bisa Nyetir</span>
                </label>
              </div>
              <div class="col s12 m3">
                <label>
                  <input name="jk" class="filled-in" type="checkbox" />
                  <span>Bisa Nyetir</span>
                </label>
              </div>
              <div class="col s12 m3">
                <label>
                  <input name="jk" class="filled-in" type="checkbox" />
                  <span>Bisa Nyetir</span>
                </label>
              </div>
              <div class="col s12 m3">
                <label>
                  <input name="jk" class="filled-in" type="checkbox" />
                  <span>Bisa Nyetir</span>
                </label>
              </div>
              <div class="col s12 m3">
                <label>
                  <input name="jk" class="filled-in" type="checkbox" />
                  <span>Bisa Nyetir</span>
                </label>
              </div>
              <div class="col s12 m3">
                <label>
                  <input name="jk" class="filled-in" type="checkbox" />
                  <span>Bisa Nyetir</span>
                </label>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div id="test4" class="col s12" style="padding: 24px">
        <form action="<?= site_url('pelamar/dashboard') ?>">
          <div class="row">
            <div class="col s12 m4">
              <div class="input-field">
                <input id="pengalaman_kerja" type="text" name="pengalaman_kerja">
                <label for="pengalaman_kerja">Pengalaman Kerja</label>
              </div>
            </div>

            <div class="col s12 m4">
              <div class="input-field">
                <select name="" id="" class="form-control">
                  <option value="">0 - 1.000.000</option>
                  <option value="">1.000.000 - 5.000.000</option>
                  <option value="">5.000.000 - 10.000.000</option>
                  <option value="">10.000.000 - 15.000.000</option>
                </select>
                <label for="email">Gaji yang diinginkan</label>
              </div>
            </div>

            <div class="col s12 m4">
              <div class="input-field">
                <select name="" id="" class="form-control">
                  <option value="">0 - 1.000.000</option>
                  <option value="">1.000.000 - 5.000.000</option>
                  <option value="">5.000.000 - 10.000.000</option>
                  <option value="">10.000.000 - 15.000.000</option>
                </select>
                <label for="email">Pekerjaan yang diinginkan</label>
              </div>
            </div>

            <div class="col s12">
              <input type="submit" value="Post" class="btn deep-purple">
            </div>

          </div>

        </form>
      </div>
    </div>


  </div>
</div>