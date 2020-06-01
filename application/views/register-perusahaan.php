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
        <div class="input-field col s12 m6">
          <input id="nama_perusahaan" type="text" name="nama_perusahaan" required value="Perusahaan ABC">
          <label for="nama_perusahaan">Nama Perusahaan</label>
        </div>

        <div class="input-field col s12 m6">
          <input id="email" type="email" name="email" required value="abc@gmail.com">
          <label for="email">Email</label>
        </div>

        <div class="input-field col s6">
          <input id="password" type="password" name="password" required value="123123">
          <label for="password">Password</label>
        </div>

        <div class="input-field col s6">
          <input id="confirm_password" type="password" name="confirm_password" required value="123123">
          <label for="confirm_password">Ulangi Password</label>
        </div>

        <div class="input-field col s12">
          <textarea id="deskripsi" name="deskripsi" class="materialize-textarea" required>Deskripsi Perusahaan</textarea>
          <label for="deskripsi">Deskripsi</label>
        </div>

        <div class="input-field col s12 m4">
          <input id="website" type="text" name="website" required value="abc.com">
          <label for="website">Website</label>
        </div>

        <div class="input-field col s12 m4">
          <select name="bidang_perusahaan" id="bidang_perusahaan">
            <option value="1" selected>Instansi / Pemerintah / BUMN</option>
            <option value="2">Swasta Lokal</option>
            <option value="3">Swasta Asing</option>
          </select>
          <label for="bidang_perusahaan">Jenis Penyedia Kerja</label>
        </div>

        <div class="col s12 m4">
          <label class="custom-file-label" for="customFile">Logo Perusahaan</label>
          <input type="file" class="custom-file-input" id="customFile">
        </div>

        <div class="input-field col s12 m8">
          <textarea id="alamat" name="alamat" class="materialize-textarea" required>Jalan Blambangan</textarea>
          <label for="alamat">Alamat</label>
        </div>

        <div class="input-field col s12 m4">
          <input id="kode_pos" type="number" name="kode_pos" required value="08123">
          <label for="kode_pos">Kode Pos</label>
        </div>

        <div class="input-field col s12 m6">
          <input id="provinsi" type="text" name="provinsi" required value="Bali">
          <label for="provinsi">Provinsi</label>
        </div>

        <div class="input-field col s12 m6">
          <input id="kabupaten" type="text" name="kabupaten" required value="Badung">
          <label for="kabupaten">Kabupaten</label>
        </div>

        <div class="input-field col s12 m3">
          <input id="no_hp" type="text" name="no_hp" required value="081234567">
          <label for="no_hp">Nomor HP</label>
        </div>

        <div class="input-field col s12 m3">
          <input id="no_fax" type="text" name="no_fax" required value="123124123">
          <label for="no_fax">Nomor Fax</label>
        </div>

        <div class="input-field col s12 m3">
          <input id="nama_kontak" type="text" name="nama_kontak" value="Budi">
          <label for="nama_kontak">Nama Kontak Person</label>
        </div>

        <div class="input-field col s12 m3">
          <input id="jabatan_perusahaan" type="text" name="jabatan_perusahaan" value="Resepsionis">
          <label for="jabatan_perusahaan">Jabatan di Perusahaan</label>
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