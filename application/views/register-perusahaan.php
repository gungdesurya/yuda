<div class="container">
  <h4>Daftar Perusahaan</h4>
  <br>
  <div class="card">
    <div class="row">
      <div class="col s12">
        <ul class="tabs">
          <li class="tab col s3"><a class="deep-orange-text text-darken-1" href="#test1">Informasi Umum</a></li>
          <li class="tab col s3"><a class="deep-orange-text text-darken-1" href="#test2">Izin Perusahaan</a></li>
        </ul>
      </div>
    </div>

    <div id="test1" class="col s12" style="padding: 24px">
      <form action="#" class="row">
        <div class="input-field col s12 m6">
          <input id="nama_perusahaan" type="text" name="nama_perusahaan">
          <label for="nama_perusahaan">Nama Perusahaan</label>
        </div>

        <div class="input-field col s12 m6">
          <input id="email" type="email" name="email">
          <label for="email">Email</label>
        </div>

        <div class="input-field col s6">
          <input id="password" type="password" name="password">
          <label for="password">Password</label>
        </div>

        <div class="input-field col s6">
          <input id="confirm_password" type="password" name="confirm_password">
          <label for="confirm_password">Ulangi Password</label>
        </div>

        <div class="input-field col s12">
          <textarea id="deskripsi" name="deskripsi" class="materialize-textarea"></textarea>
          <label for="deskripsi">Deskripsi</label>
        </div>

        <div class="input-field col s12 m4">
          <input id="website" type="text" name="website">
          <label for="website">Website</label>
        </div>

        <div class="input-field col s12 m4">
          <select name="jenis_penyedia_kerja" id="jenis_penyedia_kerja">
            <option value="">Instansi / Pemerintah / BUMN</option>
            <option value="">Swasta Lokal</option>
            <option value="">Swasta Asing</option>
          </select>
          <label for="jenis_penyedia_kerja">Jenis Penyedia Kerja</label>
        </div>

        <div class="col s12 m4">
          <label class="custom-file-label" for="customFile">Logo Perusahaan</label>
          <input type="file" class="custom-file-input" id="customFile">
        </div>

        <div class="input-field col s12 m8">
          <textarea id="alamat" name="alamat" class="materialize-textarea"></textarea>
          <label for="alamat">Alamat</label>
        </div>

        <div class="input-field col s12 m4">
          <input id="kode_pos" type="number" name="kode_pos">
          <label for="kode_pos">Kode Pos</label>
        </div>

        <div class="input-field col s12 m6">
          <input id="provinsi" type="text" name="provinsi">
          <label for="provinsi">Provinsi</label>
        </div>

        <div class="input-field col s12 m6">
          <input id="kabupaten" type="text" name="kabupaten">
          <label for="kabupaten">Kabupaten</label>
        </div>

        <div class="input-field col s12 m3">
          <input id="no_hp" type="text" name="no_hp">
          <label for="no_hp">Nomor HP</label>
        </div>

        <div class="input-field col s12 m3">
          <input id="no_fax" type="text" name="no_fax">
          <label for="no_fax">Nomor Fax</label>
        </div>

        <div class="input-field col s12 m3">
          <input id="nama_kontak_person" type="text" name="nama_kontak_person">
          <label for="nama_kontak_person">Nama Kontak Person</label>
        </div>

        <div class="input-field col s12 m3">
          <input id="jabatan_di_perusahaan" type="text" name="jabatan_di_perusahaan">
          <label for="jabatan_di_perusahaan">Jabatan di Perusahaan</label>
        </div>

        <div class="input-field col s12 m4">
          <input id="facebook" type="text" name="facebook">
          <label for="facebook">Facebook</label>
        </div>

        <div class="input-field col s12 m4">
          <input id="twitter" type="text" name="twitter">
          <label for="twitter">Twitter</label>
        </div>

        <div class="input-field col s12 m4">
          <input id="google_plus" type="text" name="google_plus">
          <label for="google_plus">Google Plus</label>
        </div>

        <div class="col s12">
          <input type="submit" value="Post" class="btn deep-purple">
        </div>
      </form>
    </div>

    <div id="test2" class="col s12" style="padding: 24px">
      <form action="">
        <div class="row">
          <div class="col s12 m4">
            <label for="akta_perusahaan">Akta Pendirian Perusahaan</label>
            <input type="file" id="akta_perusahaan">
          </div>
          <div class="col s12 m4">
            <label for="siup">SIUP</label>
            <input type="file" id="siup">
          </div>

          <div class="col s12 m4">
            <label for="tdp">TDP</label>
            <input type="file" id="tdp">
          </div>

          <div class="col s12 m4">
            <label for="situ">SITU</label>
            <input type="file" id="situ">
          </div>

          <div class="col s12 m4">
            <label for="izin_lainnya">Izin Lainnya</label>
            <input type="file" id="izin_lainnya">
          </div>
        </div>

      </form>
    </div>
  </div>

</div>