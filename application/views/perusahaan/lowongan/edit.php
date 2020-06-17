<div class="container">
  <h4>Tambah Lowongan</h4>
  <br>
  <div class="card">
    <div id="test1" class="col s12" style="padding: 24px">
      <form class="row" id="form1" method="POST" action="<?= site_url('perusahaan-s/Lowongan/submitEdit/' . $lowongan->id) ?>">
        <div class="input-field col s12">
          <input id="nama_loker" type="text" name="nama_loker" required value="<?= $lowongan->nama_loker ?>">
          <label for="nama_loker">nama Lowongan Kerja</label>
        </div>

        <div class="input-field col s12">
          <textarea id="deskripsi" name="deskripsi" class="materialize-textarea" required><?= $lowongan->deskripsi ?></textarea>
          <label for="deskripsi">Deskripsi</label>
        </div>

        <div class="input-field col s12 m4">
          <select name="pendidikan" id="pendidikan" value="<?= $lowongan->pendidikan ?>">
            <option value="SD" <?= $lowongan->pendidikan == 'SD' ? 'selected' : '' ?>>SD</option>
            <option value="SMP" <?= $lowongan->pendidikan == 'SMP' ? 'selected' : '' ?>>SMP</option>
            <option value="SMA/SMK" <?= $lowongan->pendidikan == 'SMA/SMK' ? 'selected' : '' ?>>SMA/SMK</option>
            <option value="S1" <?= $lowongan->pendidikan == 'S1' ? 'selected' : '' ?>>S1</option>
          </select>
          <label for="bidang_perusahaan">Pendidikan</label>
        </div>

        <div class="input-field col s12 m4">
          <input id="jurusan" type="text" name="jurusan" required value="<?= $lowongan->jurusan ?>" <?= $lowongan->pendidikan == 'S1' ? '' : 'disabled' ?>>
          <label for="jurusan">Jurusan</label>
        </div>

        <div class="input-field col s12 m4">
          <select name="kategori_pekerjaan" id="kategori_pekerjaan">
            <?php foreach ($kategori as $i => $k) : ?>
              <option value="<?= $k->id ?>" <?= $lowongan->kategori_pekerjaan == $k->id ? 'selected' : '' ?>><?= $k->kategori ?></option>
            <?php endforeach ?>
          </select>
          <label for="bidang_perusahaan">Kategori</label>
        </div>

        <div class="input-field col s12 m6">
          <select name="range_gaji" id="range_gaji">
            <option value="0 - 1000000" <?= $lowongan->range_gaji == '0 - 1000000' ? 'selected' : '' ?>>Rp. 0 - Rp. 1.000.000</option>
            <option value="1000000 - 2500000" <?= $lowongan->range_gaji == '1000000 - 2500000' ? 'selected' : '' ?>>Rp. 1.000.000 - Rp. 2.500.000</option>
            <option value="2500000 - 5000000" <?= $lowongan->range_gaji == '2500000 - 5000000' ? 'selected' : '' ?>>Rp. 2.500.000 - Rp. 5.000.000</option>
            <option value="5000000 - 10000000" <?= $lowongan->range_gaji == '5000000 - 10000000' ? 'selected' : '' ?>>Rp. 5.000.000 - Rp. 10.000.000</option>
          </select>
          <label for="bidang_perusahaan">Range Gaji</label>
        </div>

        <div class="input-field col s12 m6">
          <input id="pengalaman_kerja" type="number" name="pengalaman_kerja" required value="<?= $lowongan->pengalaman_kerja ?>">
          <label for="pengalaman_kerja">Pengalaman Kerja (Tahun)</label>
        </div>

        <div class="col s12 form-group">
          <div>Keterampilan</div>
          <div class="row">
            <?php foreach ($pendidikanNonFormal as $i => $item) : ?>
              <div class="col s12 m3">
                <label>
                  <?php
                  $selected = false;
                  foreach ($currPNF as $key => $p) {
                    if ($p == $item->id) {
                      $selected = true;
                      break;
                    }
                  }
                  ?>
                  <input name="keterampilan[<?= $i ?>]" class="filled-in" type="checkbox" value="<?= $item->id ?>" <?= $selected ? 'checked' : '' ?> />
                  <span><?= $item->nama_pendidikan ?></span>
                </label>
              </div>
            <?php endforeach ?>

          </div>
        </div>

        <div class="col s12 right-align">
          <input type="submit" value="Edit" class="btn deep-purple">
        </div>
      </form>
    </div>

  </div>

  <script>
    $(document).ready(function() {
      $('#pendidikan').change(function(event) {
        if (event.target.value == 'S1') $('#jurusan').prop('disabled', false)
        else $('#jurusan').prop('disabled', true)
      });

    });
  </script>