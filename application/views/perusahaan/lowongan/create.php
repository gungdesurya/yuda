<div class="container">
  <h4>Tambah Lowongan</h4>
  <br>
  <div class="card">
    <div id="test1" class="col s12" style="padding: 24px">
      <form class="row" id="form1" method="POST" action="<?= site_url('perusahaan-s/Lowongan/submitCreate') ?>">
        <div class="input-field col s12">
          <input id="nama_loker" type="text" name="nama_loker" required value="Fullstuck Developer">
          <label for="nama_loker">nama Lowongan Kerja</label>
        </div>

        <div class="input-field col s12">
          <textarea id="deskripsi" name="deskripsi" class="materialize-textarea" required>Deskripsi Lowongan</textarea>
          <label for="deskripsi">Deskripsi</label>
        </div>

        <div class="input-field col s12 m4">
          <select name="pendidikan" id="pendidikan">
            <option value="1" selected>SD</option>
            <option value="2">SMP</option>
            <option value="3">SMA</option>
          </select>
          <label for="bidang_perusahaan">Pendidikan</label>
        </div>

        <div class="input-field col s12 m4">
          <select name="jurusan" id="jurusan">
            <option value="1" selected>SD</option>
            <option value="2">SMP</option>
            <option value="3">SMA</option>
          </select>
          <label for="bidang_perusahaan">Jurusan</label>
        </div>

        <div class="input-field col s12 m4">
          <select name="kategori_pekerjaan" id="kategori_pekerjaan">
            <option value="1" selected>SD</option>
            <option value="2">SMP</option>
            <option value="3">SMA</option>
          </select>
          <label for="bidang_perusahaan">Kategori</label>
        </div>

        <div class="input-field col s12 m6">
          <select name="range_gaji" id="range_gaji">
            <option value="1" selected>SD</option>
            <option value="2">SMP</option>
            <option value="3">SMA</option>
          </select>
          <label for="bidang_perusahaan">Range Gaji</label>
        </div>

        <div class="input-field col s12 m6">
          <input id="pengalaman_kerja" type="number" name="pengalaman_kerja" required value="1">
          <label for="pengalaman_kerja">Pengalaman Kerja (Tahun)</label>
        </div>

        <div class="col s12 form-group">
          <div>Keterampilan</div>
          <div class="row">
            <?php foreach ($pendidikanNonFormal as $i => $item) : ?>
              <div class="col s12 m3">
                <label>
                  <input name="pendidikan_non_formal[<?= $i ?>]" class="filled-in" type="checkbox" value="<?= $item->id ?>" />
                  <span><?= $item->nama_pendidikan ?></span>
                </label>
              </div>
            <?php endforeach ?>

          </div>
        </div>

        <div class="col s12 right-align">
          <input type="submit" value="Next" class="btn deep-purple">
        </div>
      </form>
    </div>

  </div>