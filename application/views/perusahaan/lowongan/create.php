<div class="container">
  <h4>Tambah Lowongan</h4>
  <br>
  <div class="card">
    <div id="test1" class="col s12" style="padding: 24px">
      <form class="row" id="form1" method="POST" action="<?= site_url('perusahaan-s/Lowongan/submitCreate') ?>">
        <div class="input-field col s12 m6">
          <select name="kategori" id="kategori">
            <?php foreach ($kategori as $i => $k) : ?>
              <option value="<?= $k->kategori ?>"><?= $k->kategori ?></option>
            <?php endforeach ?>
          </select>
          <label for="kategori">Kategori</label>
        </div>

        <div class="input-field col s12 m6">
          <select name="status_pekerjaan" id="status_pekerjaan">
            <option value="WAKTU TERTENTU" selected>Waktu Tertentu</option>
            <option value="WAKTU TIDAK TERTENTU">Waktu Tidak Tertentu</option>
            <option value="LAINNYA">Lainnya</option>
          </select>
          <label for="bidang_perusahaan">Status Pekerjaan</label>
        </div>

        <div class="input-field col s12">
          <textarea id="low_deskripsi" name="low_deskripsi" class="materialize-textarea" required style="height: 200px;">Deskripsi Lowongan</textarea>
          <label for="low_deskripsi">Deskripsi</label>
        </div>

        <div class="input-field col s12 m6">
          <select name="range_gaji" id="range_gaji">
            <option value="0 - 1000000" selected>Rp. 0 - Rp. 1.000.000</option>
            <option value="1000000 - 2500000">Rp. 1.000.000 - Rp. 2.500.000</option>
            <option value="2500000 - 5000000">Rp. 2.500.000 - Rp. 5.000.000</option>
            <option value="5000000 - 10000000">Rp. 5.000.000 - Rp. 10.000.000</option>
          </select>
          <label for="range_gaji">Range Gaji</label>
        </div>

        <div class="input-field col s12 m6">
          <select name="jenis_gaji" id="jenis_gaji">
            <option value="HARIAN">Harian</option>
            <option value="MINGGUAN">Mingguan</option>
            <option value="BULANAN" selected>Bulanan</option>
          </select>
          <label for="jenis_gaji">Jenis Gaji</label>
        </div>

        <div class="input-field col s12 m6">
          <select name="pendidikan_minimal" id="pendidikan_minimal">
            <option value="SD" selected>SD</option>
            <option value="SMP">SMP</option>
            <option value="SMA/SMK">SMA/SMK</option>
            <option value="S1">S1</option>
          </select>
          <label for="pendidikan_minimal">Pendidikan Minimal</label>
        </div>

        <div class="input-field col s12 m6">
          <input id="low_jurusan" type="text" name="low_jurusan" required value="Ilmu Komputer" disabled>
          <label for="low_jurusan">Jurusan</label>
        </div>

        <div class="input-field col s12 m6 l6">
          <select name="low_status_gender" id="low_status_gender">
            <option value="tanpa gender" selected>Tanpa Gender</option>
            <option value="dengan gender">Dengan Gender</option>
          </select>
          <label for="low_status_gender">Status Gender</label>
        </div>

        <div class="input-field col s12 m6 l2">
          <input id="low_jumlah_tenaga" type="number" name="low_jumlah_tenaga" required value="1">
          <label for="low_jumlah_tenaga">Jumlah Tenaga</label>
        </div>

        <div class="input-field col s12 m6 l2">
          <input id="low_jumlah_tenaga_laki" type="number" name="low_jumlah_tenaga_laki" required value="1">
          <label for="low_jumlah_tenaga_laki">Tenaga Pria</label>
        </div>

        <div class="input-field col s12 m6 l2">
          <input id="low_jumlah_tenaga_perempuan" type="number" name="low_jumlah_tenaga_perempuan" required value="2">
          <label for="low_jumlah_tenaga_perempuan">Tenaga Wanita</label>
        </div>

        <div class="input-field col s12 m6">
          <select name="low_lokasi" id="low_lokasi">
            <option value="LUAR NEGERI">Luar Negeri</option>
            <option value="DALAM NEGERI(WILAYAH LAIN)">Dalam Negeri (Wilayah Lain)</option>
            <option value="DALAM NEGERI(TEMPAT TINGGAL)" selected>Dalam Negeri (Tempat Tinggal)</option>
          </select>
          <label for="low_lokasi">Lokasi</label>
        </div>

        <div class="input-field col s12 m6">
          <input id="low_tanggal_berakhir" type="date" name="low_tanggal_berakhir" required value="2020-11-20">
          <label for="low_tanggal_berakhir">Tanggal Berakhir</label>
        </div>

        <div class="col s12 form-group">
          <div>Keterampilan</div>
          <div class="row">
            <?php foreach ($pendidikanNonFormal as $i => $item) : ?>
              <div class="col s12 m3">
                <label>
                  <input name="keterampilan[<?= $i ?>]" class="filled-in" type="checkbox" value="<?= $item->id ?>" />
                  <span><?= $item->nama_pendidikan ?></span>
                </label>
              </div>
            <?php endforeach ?>

          </div>
        </div>

        <div class="col s12 right-align">
          <input type="submit" value="Tambah" class="btn deep-purple">
        </div>
      </form>
    </div>

  </div>

  <script>
    $(document).ready(function() {
      $('#low_jumlah_tenaga_laki').prop('disabled', true)
      $('#low_jumlah_tenaga_perempuan').prop('disabled', true)

      $('#low_status_gender').change(function(event) {
        if (event.target.value == 'dengan gender') {
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
        if (event.target.value == 'S1') $('#low_jurusan').prop('disabled', false)
        else $('#low_jurusan').prop('disabled', true)
      });

    });
  </script>