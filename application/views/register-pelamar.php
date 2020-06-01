<div class="container">
  <h4>Daftar Pelamar</h4>
  <br>
  <div class="card">
    <div class="row">
      <div class="col s12">
        <ul class="tabs" id="tabs">
          <li class="tab col s3" id="menu1"><a class="active deep-orange-text text-darken-1" href="#test1">Informasi Umum</a></li>
          <li class="tab col s3 disabled" id="menu2"><a class="deep-orange-text text-darken-1" href="#test2">Pendidikan Formal</a></li>
          <li class="tab col s3 disabled" id="menu3"><a class="deep-orange-text text-darken-1" href="#test3">Pendidikan Non-Formal</a></li>
          <li class="tab col s3 disabled" id="menu4"><a class="deep-orange-text text-darken-1" href="#test4">Pekerjaan</a></li>
        </ul>
      </div>
      <div id="test1" class="col s12" style="padding: 24px">
        <form action="#" class="row" id="form1" enctype="multipart/form-data" method="post" name="form1">
          <div class="input-field col s12">
            <input id="email" type="email" name="email" required value="gungde@gmail.com">
            <label for="email">Email</label>
          </div>

          <div class="input-field col s12 m6">
            <input id="password" type="password" name="password" required value="123123">
            <label for="password">Password</label>
          </div>

          <div class="input-field col s12 m6">
            <input id="confirm_password" type="password" name="confirm_password" required value="123123">
            <label for="confirm_password">Ulangi Password</label>
          </div>

          <div class="input-field col s12">
            <input id="nomor_hp" type="text" name="nomor_hp" required value="081234123123">
            <label for="nomor_hp">Nomor HP</label>
          </div>

          <div class=""></div>
          <label for="foto">Foto</label>
          <div class="input-field">
            <input id="foto" type="file" name="foto">
          </div>
          <br>

          <div class="input-field col s12 m6">
            <input id="nama" type="text" name="nama" required value="Surya Kusuma">
            <label for="nama">Nama</label>
          </div>

          <div class="input-field col s12 m6">
            <input id="nomor_ktp" type="text" name="nomor_ktp" required value="081234123123">
            <label for="nomor_ktp">Nomor KTP</label>
          </div>

          <div class="input-field col s12 m6">
            <select name="agama">
              <option value="hindu" selected>Hindu</option>
              <option value="islam">Islam</option>
              <option value="katolik">Kristen Katolik</option>
              <option value="protestan">Kristen Protestan</option>
              <option value="budha">Budha</option>
              <option value="konghuchu">Konghuchu</option>
            </select>
            <label>Agama</label>
          </div>

          <div class="input-field col s12 m6">
            <input id="tanggal_lahir" type="date" name="tanggal_lahir" required value="1995-11-20">
            <label for="tanggal_lahir">Tanggal Lahir</label>
          </div>

          <div class="col s12">
            <label>Jenis Kelamin</label>
            <div>
              <label>
                <input name="jk" type="radio" value="l" checked />
                <span>Laki-laki</span>
              </label>
              <label>
                <input name="jk" type="radio" value="p" />
                <span>Perempuan</span>
              </label>
            </div>
          </div>

          <div class="input-field col s12 m3">
            <input id="provinsi" type="text" name="provinsi" required value="Bali">
            <label for="provinsi">Provinsi</label>
          </div>

          <div class="input-field col s12 m3">
            <input id="kabupaten" type="text" name="kabupaten" required value="Denpasar">
            <label for="kabupaten">Kabupaten</label>
          </div>

          <div class="input-field col s12 m3">
            <input id="kecamatan" type="text" name="kecamatan" required value="Denpasar">
            <label for="kecamatan">Kecamatan</label>
          </div>

          <div class="input-field col s12 m3">
            <input id="kelurahan" type="text" name="kelurahan" required value="Denpasar">
            <label for="kelurahan">Kelurahan</label>
          </div>

          <div class="input-field col s12 m8">
            <textarea id="alamat" name="alamat" class="materialize-textarea" required>Jalan Blambangan Gg 1 No 1</textarea>
            <label for="alamat">Alamat</label>
          </div>

          <div class="input-field col s12 m4">
            <input id="kode_pos" type="number" name="kode_pos" required value="80132">
            <label for="kode_pos">Kode Pos</label>
          </div>

          <div class="col s12 right-align">
            <input type="submit" value="Next" class="btn deep-purple">
          </div>
        </form>
      </div>

      <div id="test2" class="col s12" style="padding: 24px">
        <form action="#" class="row" id="form2">
          <div class="row">
            <div class="col s12">
              <h6><b>SD</b></h6>
            </div>
            <div class="input-field col s12 m4">

            </div>

            <div class="input-field col s12 m4">
              <select name="tahun[0]">
                <option value="1" selected>2010</option>
                <option value="2">2011</option>
                <option value="3">2012</option>
              </select>
              <label for="first_name">Tahun</label>
            </div>

            <div class="col s12 m4">
              <label for="file0">Berkas</label>
              <div class="input-field">
                <input id="file0" type="file" name="berkas[0]">
              </div>

            </div>

            <div class="col s12">
              <h6><b>SMP</b></h6>
            </div>
            <div class="input-field col s12 m4">

            </div>

            <div class="input-field col s12 m4">
              <select name="tahun[1]">
                <option value="1" selected>2010</option>
                <option value="2">2011</option>
                <option value="3">2012</option>
              </select>
              <label for="first_name">Tahun</label>
            </div>

            <div class="col s12 m4">
              <label for="file1">Berkas</label>
              <div class="input-field">
                <input id="file1" type="file" name="berkas[1]">
              </div>
            </div>

            <div class="col s12">
              <h6><b>SMA/SMK</b></h6>
            </div>
            <div class="input-field col s12 m4">
              <input id="jurusan_sma" type="text" class="validate" name="jurusan[0]" value="IPA">
              <label for="jurusan_sma">Jurusan</label>
            </div>

            <div class="input-field col s12 m4">
              <select name="tahun[2]">
                <option value="1" selected>2010</option>
                <option value="2">2011</option>
                <option value="3">2012</option>
              </select>
              <label for="first_name">Tahun</label>
            </div>

            <div class="col s12 m4">
              <label for="file2">Ijazah</label>
              <div class="input-field">
                <input id="file2" type="file" name="berkas[2]">
              </div>
            </div>

            <div class="col s12">
              <h6><b>S1</b></h6>
            </div>
            <div class="input-field col s12 m4">
              <input id="jurusan_s1" type="text" class="validate" name="jurusan[1]" value="Komputer">
              <label for="jurusan_s1">Jurusan</label>
            </div>

            <div class="input-field col s12 m4">
              <select name="tahun[3]">
                <option value="1" selected>2010</option>
                <option value="2">2011</option>
                <option value="3">2012</option>
              </select>
              <label for="first_name">Tahun</label>
            </div>

            <div class="col s12 m4">
              <label for="file3">Ijazah</label>
              <div class="input-field">
                <input id="file3" type="file" name="berkas[3]">
              </div>
            </div>

            <div class="col s6">
              <input type="button" value="Back" class="btn red" id="back2">
            </div>
            <div class="col s6 right-align">
              <input type="submit" value="Next" class="btn deep-purple">
            </div>
          </div>

        </form>
      </div>
      <div id="test3" class="col s12" style="padding: 24px">
        <h5>Pendidikan Non Formal</h5>
        <br>
        <form action="#" id="form3">
          <div class="form-group">
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

          <br>
          <div class="row">
            <div class="col s6">
              <input type="button" value="Back" class="btn red" id="back3">
            </div>
            <div class="col s6 right-align">
              <input type="submit" value="Next" class="btn deep-purple">
            </div>
          </div>
        </form>
      </div>
      <div id="test4" class="col s12" style="padding: 24px">
        <form action="#" id="form4">
          <div class="row">
            <div class="col s12 m4">
              <div class="input-field">
                <input id="pengalaman_kerja" type="number" name="pengalaman_kerja" value="2">
                <label for="pengalaman_kerja">Pengalaman Kerja (Tahun)</label>
              </div>
            </div>

            <div class="col s12 m4">
              <div class="input-field">
                <input id="gaji_diinginkan" type="number" name="gaji_diinginkan" value="5000000">
                <label for="gaji_diinginkan">Gaji yang diinginkan</label>
              </div>
              <br>
            </div>

            <div class="col s12 m4">
              <div class="input-field">
                <select name="spesialisasi" id="spesialisasi" class="form-control">
                  <option value="" selected>0 - 1.000.000</option>
                  <option value="">1.000.000 - 5.000.000</option>
                  <option value="">5.000.000 - 10.000.000</option>
                  <option value="">10.000.000 - 15.000.000</option>
                </select>
                <label for="spesialisasi">Pekerjaan yang diinginkan</label>
              </div>
            </div>

            <div class="col s6">
              <input type="button" value="Back" class="btn red" id="back4">
            </div>
            <div class="col s6 right-align">
              <input type="submit" value="Daftar" class="btn deep-purple">
            </div>

          </div>

        </form>
      </div>
    </div>


  </div>
</div>

<script>
  var form = {}

  $(document).ready(function() {
    $('#form1').submit(function(event) {
      event.preventDefault();

      let formdata = new FormData(this);
      for (var pair of formdata.entries()) {
        form[pair[0]] = pair[1]
      }

      $('#menu2').removeClass('disabled')
      let instance = M.Tabs.init($('#tabs'))[0]
      instance.select('test2');
      $('#menu1').addClass('disabled')
    });

    $('#form2').submit(function(event) {
      event.preventDefault();

      let formdata = new FormData(this);
      for (var pair of formdata.entries()) {
        // form[pair[0]] = pair[1]
        if (pair[0].endsWith(']')) {
          let split = pair[0].split('[')

          let idx = 0
          if (!form[split[0]]) form[split[0]] = []
          else idx = form[split[0]].length
          form[split[0]][idx] = pair[1]
        } else form[pair[0]] = pair[1]
      }

      $('#menu3').removeClass('disabled')
      let instance = M.Tabs.init($('#tabs'))[0]
      instance.select('test3');
      $('#menu2').addClass('disabled')
    });

    $('#form3').submit(function(event) {
      event.preventDefault();

      let formdata = new FormData(this);
      for (var pair of formdata.entries()) {
        form[pair[0]] = pair[1]

        // if (pair[0].endsWith(']')) {
        //   let split = pair[0].split('[')
        // console.log('split', split[0]);

        // console.log(idx);


        // let idx = 0
        // if (!form[split[0]]) form[split[0]] = []
        // else idx = form[split[0]].length
        // form[split[0]][idx] = pair[1]
        // console.log(form);


        // } 
      }

      $('#menu4').removeClass('disabled')
      let instance = M.Tabs.init($('#tabs'))[0]
      instance.select('test4');
      $('#menu3').addClass('disabled')
    });

    $('#form4').submit(function(event) {
      event.preventDefault();

      let formdata = new FormData(this);
      for (var pair of formdata.entries()) {
        form[pair[0]] = pair[1]
      }

      // delete form['berkas[0]']
      // delete form['berkas[1]']
      // delete form['berkas[2]']
      // delete form['berkas[3]']
      // delete form['jurusan[]']
      // delete form['tahun[]']
      delete form.foto
      delete form.berkas

      console.log(form);

      $.ajax({
        url: '<?= site_url('Daftar/submitPelamar') ?>',
        type: 'POST',
        data: form,
        success: function(res) {
          alert('Terdaftar sebagai pelamar!');
          window.location.href = "<?= site_url('pelamar/Dashboard') ?>";
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

    $('#back3').click(function(event) {
      $('#menu2').removeClass('disabled')
      let instance = M.Tabs.init($('#tabs'))[0]
      instance.select('test2');
      $('#menu3').addClass('disabled')
    })

    $('#back4').click(function(event) {
      $('#menu3').removeClass('disabled')
      let instance = M.Tabs.init($('#tabs'))[0]
      instance.select('test3');
      $('#menu4').addClass('disabled')
    })
  });
</script>