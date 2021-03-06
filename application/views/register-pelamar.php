<div class="container">
  <h4>Daftar Pelamar</h4>
  <br>
  <div class="card">
    <div class="row">
      <div class="col s12">
        <ul class="tabs" id="tabs">
          <li class="tab col s3 " id="menu1"><a class="active blue-text text-darken-1" href="#test1">Informasi Umum</a></li>
          <li class="tab col s3 disabled" id="menu2"><a class=" blue-text text-darken-1" href="#test2">Pendidikan Formal</a></li>
          <li class="tab col s3 disabled" id="menu3"><a class="blue-text text-darken-1" href="#test3">Pendidikan Non-Formal</a></li>
          <li class="tab col s3 disabled" id="menu4"><a class="blue-text text-darken-1" href="#test4">Pekerjaan</a></li>
        </ul>
      </div>
      <div id="test1" class="col s12" style="padding: 24px">
        <form action="#" class="row" id="form1" enctype="multipart/form-data" method="post" name="form1">
          <div class="input-field col s12">
            <input id="email" type="email" name="email" required value="gungde.surya@gmail.com">
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
            <input id="nomor_hp" type="text" name="nomor_hp" required value="0812342345">
            <label for="nomor_hp">Nomor HP</label>
          </div>

          <!-- <div class=""></div>
          <label for="foto">Foto</label>
          <div class="input-field">
            <input id="foto" type="file" name="foto" required>
          </div>
          <br> -->

          <div class="input-field col s12 m6">
            <input id="nama" type="text" name="nama" required value="gungde surya">
            <label for="nama">Nama</label>
          </div>

          <div class="input-field col s12 m6">
            <input id="nomor_ktp" type="text" name="nomor_ktp" required value="28391823190283">
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
            <br><br>
          </div>

          <div class="input-field col s12 m12">
            <textarea id="alamat" name="alamat" class="materialize-textarea" required>Jalan Blambangan</textarea>
            <label for="alamat">Alamat</label>
          </div>

          <div class="col s12 right-align">
            <input type="submit" value="Next" class="btn blue darken-3">
          </div>
        </form>
      </div>

      <div id="test2" class="col s12" style="padding: 24px">
        <form action="#" class="row" id="form2">
          <div class="row">
            <!-- SD PENDIDIKAN PELAMAR  -->
            <div class="col s12 m6">
              <h6><b>SD</b></h6>
              <input type="hidden" name="jurusan[0]" value="">
            </div>

            <div class="input-field col s12 m3">
              <select name="tahun[0]">
                <option value="" selected>Kosong</option>
                <?php
                $thn_skr = date('Y');
                for ($x = $thn_skr; $x >= 1980; $x--) {
                ?>
                  <option value="<?php echo "$x/" . ($x + 1) ?>"><?php echo "$x/" . ($x + 1) ?></option>
                <?php } ?>
              </select>
              <label for="first_name">Tahun</label>
            </div>

            <div class="col s12 m3">
              <label for="file0">Berkas</label>
              <div class="input-field">
                <input id="file0" type="file" name="berkas[0]">
              </div>
            </div>
            <!-- END SD PENDIDIKAN FORMAL -->

            <!-- SMP PENDIDIKAN FORMAL -->
            <div class="col s12 m6">
              <h6><b>SMP</b></h6>
              <input type="hidden" name="jurusan[1]" value="">
            </div>

            <div class="input-field col s12 m3">
              <select name="tahun[1]">
                <option value="" selected>Kosong</option>
                <?php
                $thn_skr = date('Y');
                for ($x = $thn_skr; $x >= 1980; $x--) {
                ?>
                  <option value="<?php echo "$x/" . ($x + 1) ?>"><?php echo "$x/" . ($x + 1) ?></option>
                <?php } ?>
              </select>
              <label for="first_name">Tahun</label>
            </div>

            <div class="col s12 m3">
              <label for="file1">Berkas</label>
              <div class="input-field">
                <input id="file1" type="file" name="berkas[1]">
              </div>
            </div>
            <!-- END SMP PENDIDIKAN FORMAL -->

            <!-- SMA PENDIDIKAN FORMAL -->
            <div class="col s12">&nbsp;</div>
            <div class="col s12 m3">
              <h6><b>SMA/SMK</b></h6>
            </div>

            <div class="input-field col s12 m3">
              <input id="jurusan_sma" type="text" class="validate" name="jurusan[2]">
              <label for="jurusan_sma">Jurusan</label>
            </div>

            <div class="input-field col s12 m3">
              <select name="tahun[2]">
                <option value="" selected>Kosong</option>
                <?php
                $thn_skr = date('Y');
                for ($x = $thn_skr; $x >= 1980; $x--) {
                ?>
                  <option value="<?php echo "$x/" . ($x + 1) ?>"><?php echo "$x/" . ($x + 1) ?></option>
                <?php } ?>
              </select>
              <label for="first_name">Tahun</label>
            </div>

            <div class="col s12 m3">
              <label for="file2">Ijazah</label>
              <div class="input-field">
                <input id="file2" type="file" name="berkas[2]">
              </div>
            </div>
            <!-- END SMA PENDIDIKAN FORMAL -->

            <!-- D1 PENDIDIKAN FORMAL -->
            <div class="col s12">&nbsp;</div>
            <div class="col s12 m3">
              <h6><b>D1</b></h6>
            </div>

            <div class="input-field col s12 m3">
              <input id="jurusan_d1" type="text" class="validate" name="jurusan[3]">
              <label for="jurusan_d1">Jurusan</label>
            </div>

            <div class="input-field col s12 m3">
              <select name="tahun[3]">
                <option value="" selected>Kosong</option>
                <?php
                $thn_skr = date('Y');
                for ($x = $thn_skr; $x >= 1980; $x--) {
                ?>
                  <option value="<?php echo "$x/" . ($x + 1) ?>"><?php echo "$x/" . ($x + 1) ?></option>
                <?php } ?>
              </select>
              <label for="first_name">Tahun</label>
            </div>

            <div class="col s12 m3">
              <label for="file3">Ijazah</label>
              <div class="input-field">
                <input id="file3" type="file" name="berkas[3]">
              </div>
            </div>
            <!-- END D1 PENDIDIKAN FORMAL -->

            <!-- D2 PENDIDIKAN FORMAL -->
            <div class="col s12">&nbsp;</div>
            <div class="col s12 m3">
              <h6><b>D2</b></h6>
            </div>

            <div class="input-field col s12 m3">
              <input id="jurusan_d2" type="text" class="validate" name="jurusan[4]">
              <label for="jurusan_d2">Jurusan</label>
            </div>

            <div class="input-field col s12 m3">
              <select name="tahun[4]">
                <option value="" selected>Kosong</option>
                <?php
                $thn_skr = date('Y');
                for ($x = $thn_skr; $x >= 1980; $x--) {
                ?>
                  <option value="<?php echo "$x/" . ($x + 1) ?>"><?php echo "$x/" . ($x + 1) ?></option>
                <?php } ?>
              </select>
              <label for="first_name">Tahun</label>
            </div>

            <div class="col s12 m3">
              <label for="file4">Ijazah</label>
              <div class="input-field">
                <input id="file4" type="file" name="berkas[4]">
              </div>
            </div>
            <!-- END D2 PENDIDIKAN FORMAL -->

            <!-- D3 PENDIDIKAN FORMAL -->
            <div class="col s12">&nbsp;</div>
            <div class="col s12 m3">
              <h6><b>D3</b></h6>
            </div>

            <div class="input-field col s12 m3">
              <input id="jurusan_d3" type="text" class="validate" name="jurusan[5]">
              <label for="jurusan_d3">Jurusan</label>
            </div>

            <div class="input-field col s12 m3">
              <select name="tahun[5]">
                <option value="" selected>Kosong</option>
                <?php
                $thn_skr = date('Y');
                for ($x = $thn_skr; $x >= 1980; $x--) {
                ?>
                  <option value="<?php echo "$x/" . ($x + 1) ?>"><?php echo "$x/" . ($x + 1) ?></option>
                <?php } ?>
              </select>
              <label for="first_name">Tahun</label>
            </div>

            <div class="col s12 m3">
              <label for="file5">Ijazah</label>
              <div class="input-field">
                <input id="file5" type="file" name="berkas[5]">
              </div>
            </div>
            <!-- END D3 PENDIDIKAN FORMAL -->

            <!-- S1 PENDIDIKAN FORMAL -->
            <div class="col s12">&nbsp;</div>
            <div class="col s12 m3">
              <h6><b>S1</b></h6>
            </div>

            <div class="input-field col s12 m3">
              <input id="jurusan_s1" type="text" class="validate" name="jurusan[6]">
              <label for="jurusan_s1">Jurusan</label>
            </div>

            <div class="input-field col s12 m3">
              <select name="tahun[6]">
                <option value="" selected>Kosong</option>
                <?php
                $thn_skr = date('Y');
                for ($x = $thn_skr; $x >= 1980; $x--) {
                ?>
                  <option value="<?php echo "$x/" . ($x + 1) ?>"><?php echo "$x/" . ($x + 1) ?></option>
                <?php } ?>
              </select>
              <label for="first_name">Tahun</label>
            </div>

            <div class="col s12 m3">
              <label for="file6">Ijazah</label>
              <div class="input-field">
                <input id="file6" type="file" name="berkas[6]">
              </div>
            </div>
            <!-- END S1 PENDIDIKAN FORMAL -->

            <div class="col s6">
              <input type="button" value="Back" class="btn red" id="back2">
            </div>
            <div class="col s6 right-align">
              <input type="submit" value="Next" class="btn blue">
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
              <input type="submit" value="Next" class="btn blue">
            </div>
          </div>
        </form>
      </div>
      <div id="test4" class="col s12" style="padding: 24px">
        <form action="#" id="form4">
          <div class="row">
            <div class="col s12 m4">
              <div class="input-field">
                <input id="pengalaman_kerja" type="number" name="pengalaman_kerja">
                <label for="pengalaman_kerja">Pengalaman Kerja (Tahun)</label>
              </div>
            </div>

            <div class="col s12 m4">
              <div class="input-field">
                <input id="gaji_diinginkan" type="number" name="gaji_diinginkan">
                <label for="gaji_diinginkan">Gaji yang diinginkan</label>
              </div>
              <br>
            </div>

            <div class="col s12 m4">
              <div class="input-field">
                <select name="spesialisasi" id="spesialisasi" class="form-control">
                  <?php foreach ($kategori as $i => $k) : ?>
                    <option value="<?= $k->kategori ?>"><?= $k->kategori ?></option>
                  <?php endforeach ?>
                </select>
                <label for="spesialisasi">Pekerjaan yang diinginkan</label>
              </div>
            </div>

            <div class="col s6">
              <input type="button" value="Back" class="btn red" id="back4">
            </div>
            <div class="col s6 right-align">
              <input type="submit" value="Daftar" class="btn blue">
            </div>

          </div>

        </form>
      </div>
    </div>


  </div>
</div>

<script>
  var form = new FormData()

  $(document).ready(function() {
    $('#form1').submit(function(event) {
      event.preventDefault();

      let formdata = new FormData(this);
      for (var pair of formdata.entries()) form.append(pair[0], pair[1]);

      $('#menu2').removeClass('disabled')
      let instance = M.Tabs.init($('#tabs'))[0]
      instance.select('test2');
      $('#menu1').addClass('disabled')
    });

    $('#form2').submit(function(event) {
      event.preventDefault();

      let formdata = new FormData(this);
      for (var pair of formdata.entries()) form.append(pair[0], pair[1]);

      $('#menu3').removeClass('disabled')
      let instance = M.Tabs.init($('#tabs'))[0]
      instance.select('test3');
      $('#menu2').addClass('disabled')
    });

    $('#form3').submit(function(event) {
      event.preventDefault();

      let formdata = new FormData(this);
      for (var pair of formdata.entries()) form.append(pair[0], pair[1]);

      $('#menu4').removeClass('disabled')
      let instance = M.Tabs.init($('#tabs'))[0]
      instance.select('test4');
      $('#menu3').addClass('disabled')
    });

    $('#form4').submit(function(event) {
      event.preventDefault();

      let formdata = new FormData(this);
      for (var pair of formdata.entries()) form.append(pair[0], pair[1]);

      $.ajax({
        url: '<?= site_url('Daftar/submitPelamar') ?>',
        type: 'POST',
        data: form,
        dataType: 'json',
        cache: false,
        contentType: false,
        processData: false,
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