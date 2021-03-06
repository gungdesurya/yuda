<div class="container">
  <h4>Edit Informasi Lowongan</h4>
  <br>
  <div class="card">
    <div id="test1" class="col s12" style="padding: 24px">
      <form class="row" id="form1" method="POST" action="<?= site_url('perusahaan-s/Lowongan/submitEdit/' . $lowongan->id) ?>">
        <div class="input-field col s12 m6">
          <select name="kategori" id="kategori">
            <?php foreach ($kategori as $i => $k) : ?>
              <option value="<?= $k->kategori ?>" <?= $lowongan->kategori == $k->kategori ? 'selected' : '' ?>><?= $k->kategori ?></option>
            <?php endforeach ?>
          </select>
          <label for="kategori">Kategori</label>
        </div>

        <div class="input-field col s12 m6">
          <select name="status_pekerjaan" id="status_pekerjaan">
            <option value="WAKTU TERTENTU" <?= $lowongan->status_pekerjaan == 'WAKTU TERTENTU' ? 'selected' : '' ?>>Waktu Tertentu</option>
            <option value="WAKTU TIDAK TERTENTU" <?= $lowongan->status_pekerjaan == 'WAKTU TIDAK TERTENTU' ? 'selected' : '' ?>>Waktu Tidak Tertentu</option>
            <option value="LAINNYA" <?= $lowongan->status_pekerjaan == 'LAINNYA' ? 'selected' : '' ?>>Lainnya</option>
          </select>
          <label for="bidang_perusahaan">Status Pekerjaan</label>
        </div>

        <div class="input-field col s12">
          <textarea id="deskripsi" name="low_deskripsi" class="materialize-textarea" required style="height: 200px;"><?= $lowongan->low_deskripsi ?></textarea>
          <label for="low_deskripsi">Deskripsi</label>
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
          <select name="jenis_gaji" id="jenis_gaji">
            <option value="HARIAN" <?= $lowongan->jenis_gaji == 'HARIAN' ? 'selected' : '' ?>>Harian</option>
            <option value="MINGGUAN" <?= $lowongan->jenis_gaji == 'MINGGUAN' ? 'selected' : '' ?>>Mingguan</option>
            <option value="BULANAN" <?= $lowongan->jenis_gaji == 'BULANAN' ? 'selected' : '' ?>>Bulanan</option>
          </select>
          <label for="jenis_gaji">Jenis Gaji</label>
        </div>

        <div class="input-field col s12 m6">
          <select name="pendidikan_minimal" id="pendidikan_minimal" value="<?= $lowongan->pendidikan ?>">
            <option value="SD" <?= $lowongan->pendidikan_minimal == 'SD' ? 'selected' : '' ?>>SD</option>
            <option value="SMP" <?= $lowongan->pendidikan_minimal == 'SMP' ? 'selected' : '' ?>>SMP</option>
            <option value="SMA/SMK" <?= $lowongan->pendidikan_minimal == 'SMA/SMK' ? 'selected' : '' ?>>SMA/SMK</option>
            <option value="Diploma I" <?= $lowongan->pendidikan_minimal == 'S1' ? 'selected' : '' ?>>Diploma I</option>
            <option value="Diploma II" <?= $lowongan->pendidikan_minimal == 'S1' ? 'selected' : '' ?>>Diploma II</option>
            <option value="Diploma III" <?= $lowongan->pendidikan_minimal == 'S1' ? 'selected' : '' ?>>Diploma III</option>
            <option value="Diploma IV" <?= $lowongan->pendidikan_minimal == 'S1' ? 'selected' : '' ?>>Diploma IV/S1</option>
          </select>
          <label for="pendidikan_minimal">Pendidikan</label>
        </div>

        <div class="input-field col s12 m6">
          <input id="low_jurusan" type="text" name="low_jurusan" required value="<?= $lowongan->low_jurusan ?>" <?= ($lowongan->pendidikan_minimal == 'Diploma I' or
                                                                                                                  $lowongan->pendidikan_minimal == 'Diploma II' or
                                                                                                                  $lowongan->pendidikan_minimal == 'Diploma III' or
                                                                                                                  $lowongan->pendidikan_minimal == 'Diploma IV' or
                                                                                                                  $lowongan->pendidikan_minimal == 'SMA/SMK') ? '' : 'disabled' ?>>
          <label for="low_jurusan">Jurusan</label>
        </div>

        <div class="input-field col s12 m6 l6">
          <select name="low_status_gender" id="low_status_gender">
            <option value="tanpa_gender" <?= $lowongan->low_status_gender == 'tanpa_gender' ? 'selected' : '' ?>>Tanpa Gender</option>
            <option value="dengan_gender" <?= $lowongan->low_status_gender == 'dengan_gender' ? 'selected' : '' ?>>Dengan Gender</option>
          </select>
          <label for="low_status_gender">Status Gender</label>
        </div>

        <div class="input-field col s12 m6 l2">
          <input id="low_jumlah_tenaga" type="number" name="low_jumlah_tenaga" required value="<?= $lowongan->low_jumlah_tenaga ?>" <?= $lowongan->low_status_gender == 'tanpa_gender' ? '' : 'disabled' ?>>
          <label for="low_jumlah_tenaga">Jumlah Tenaga</label>
        </div>

        <div class="input-field col s12 m6 l2">
          <input id="low_jumlah_tenaga_laki" type="number" name="low_jumlah_tenaga_laki" required value="<?= $lowongan->low_jumlah_tenaga_laki ?>" <?= $lowongan->low_status_gender == 'dengan_gender' ? '' : 'disabled' ?>>
          <label for="low_jumlah_tenaga_laki">Tenaga Pria</label>
        </div>

        <div class="input-field col s12 m6 l2">
          <input id="low_jumlah_tenaga_perempuan" type="number" name="low_jumlah_tenaga_perempuan" required value="<?= $lowongan->low_jumlah_tenaga_perempuan ?>" <?= $lowongan->low_status_gender == 'dengan_gender' ? '' : 'disabled' ?>>
          <label for="low_jumlah_tenaga_perempuan">Tenaga Wanita</label>
        </div>

        <div class="input-field col s12 m6">
          <select name="low_lokasi" id="low_lokasi">
            <option value="LUAR NEGERI" <?= $lowongan->low_lokasi == 'LUAR NEGERI' ? 'selected' : '' ?>>Luar Negeri</option>
            <option value="DALAM NEGERI(WILAYAH LAIN)" <?= $lowongan->low_lokasi == 'DALAM NEGERI(WILAYAH LAIN)' ? 'selected' : '' ?>>Dalam Negeri (Wilayah Lain)</option>
            <option value="DALAM NEGERI(TEMPAT TINGGAL)" <?= $lowongan->low_lokasi == 'DALAM NEGERI(TEMPAT TINGGAL)' ? 'selected' : '' ?>>Dalam Negeri (Tempat Tinggal)</option>
          </select>
          <label for="low_lokasi">Lokasi</label>
        </div>

        <div class="input-field col s12 m6">
          <input id="low_tanggal_berakhir" type="date" name="low_tanggal_berakhir" required value="<?= $lowongan->low_tanggal_berakhir ?>">
          <label for="low_tanggal_berakhir">Tanggal Berakhir</label>
        </div>

        <div class="col s12 form-group">
          <div>Keterampilan</div>
          <div class="row">
            <?php foreach ($pendidikanNonFormal as $i => $item) : ?>
              <div class="col s12 m3">
                <label>
                  <input name="pendidikan_non_formal[<?= $i ?>]" class="filled-in" type="checkbox" value="<?= $i ?>" <?= $lowongan->keterampilan[$i] ? 'checked' : '' ?> />
                  <span><?= $item->nama_pendidikan ?></span>
                </label>
              </div>
            <?php endforeach ?>

          </div>
        </div>

        <div class="col s12 right-align">
          <input type="submit" value="Edit" class="btn blue darken-3">
        </div>
      </form>
    </div>

  </div>

  <script>
    $(document).ready(function() {

      $('#low_status_gender').change(function(event) {
        if (event.target.value == 'dengan_gender') {
          $('#low_jumlah_tenaga').prop('disabled', true)
          $('#low_jumlah_tenaga_laki').prop('disabled', false)
          $('#low_jumlah_tenaga_perempuan').prop('disabled', false)
        } else {
          $('#low_jumlah_tenaga').prop('disabled', false)
          $('#low_jumlah_tenaga_laki').prop('disabled', true)
          $('#low_jumlah_tenaga_perempuan').prop('disabled', true)
        }
      });

      $('#pendidikan_minimal').change(function(event) {
        if (
          event.target.value == 'Diploma I' ||
          event.target.value == 'Diploma II' ||
          event.target.value == 'Diploma III' ||
          event.target.value == 'Diploma IV' ||
          event.target.value == 'SMA/SMK'
        ) $('#low_jurusan').prop('disabled', false)
        else $('#low_jurusan').prop('disabled', true)
      });

    });
  </script>