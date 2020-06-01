<div class="container">
  <h4>Daftar Perusahaan</h4>
  <br>
  <div class="card">
    <div class="row">
      <div class="col s12">
        <ul class="tabs" id="tabs">
          <li class="tab col s3" id="menu1"><a class="active deep-orange-text text-darken-1" href="#test1">Informasi Umum</a></li>
          <li class="tab col s3 disabled" id="menu2"><a class="deep-orange-text text-darken-1" href="#test2">Izin Perusahaan</a></li>
        </ul>
      </div>
    </div>

    <div id="test1" class="col s12" style="padding: 24px">
      <form class="row" id="form1">
        <div class="input-field col s12">
          <input id="nama_loker" type="text" name="nama_loker" required value="Fullstuck Developer">
          <label for="nama_loker">nama Lowongan Kerja</label>
        </div>

        <div class="input-field col s12">
          <textarea id="deskripsi" name="deskripsi" class="materialize-textarea" required>Deskripsi Lowongan</textarea>
          <label for="deskripsi">Deskripsi</label>
        </div>

        <div class="input-field col s12">
          <textarea id="deskripsi" name="deskripsi" class="materialize-textarea" required>Deskripsi Perusahaan</textarea>
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

    <div id="test2" class="col s12" style="padding: 24px">
      <form class="row" id="form2">
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

        <div class="col s6">
          <input type="button" value="Back" class="btn red" id="back2">
        </div>
        <div class="col s6 right-align">
          <input type="submit" value="Next" class="btn deep-purple">
        </div>

      </form>
    </div>

  </div>

  <script>
    var form = {}

    $(document).ready(function() {
      $('#form1').submit(function(event) {
        event.preventDefault();

        let formdata = new FormData(this);
        for (var pair of formdata.entries()) form[pair[0]] = pair[1]

        $('#menu2').removeClass('disabled')
        let instance = M.Tabs.init($('#tabs'))[0]
        instance.select('test2');
        $('#menu1').addClass('disabled')
      });

      $('#form2').submit(function(event) {
        event.preventDefault();

        $.ajax({
          url: '<?= site_url('Daftar/submitPerusahaan') ?>',
          type: 'POST',
          data: form,
          success: function(res) {
            alert('Terdaftar sebagai perusahaan!');
            window.location.href = "<?= site_url('perusahaan/Dashboard') ?>";
          },
          error: function() {
            alert("error occured");
          }
        });

      });

      $('#back2').click(function(event) {
        $('#menu1').removeClass('disabled')
        let instance = M.Tabs.init($('#tabs'))[0]
        instance.select('test1');
        $('#menu2').addClass('disabled')
      })
    });
  </script>