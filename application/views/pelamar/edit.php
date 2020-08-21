<div class="container">
  <h4>Edit Informasi Pelamar</h4>
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
            <input id="nomor_hp" type="text" name="nomor_hp" required value="<?= $pelamar->nomor_hp ?>">
            <label for="nomor_hp">Nomor HP</label>
          </div>

          <!-- <div class=""></div>
          <label for="foto">Foto</label>
          <div class="input-field">
            <input id="foto" type="file" name="foto" required>
          </div>
          <br> -->

          <div class="input-field col s12 m6">
            <input id="nama" type="text" name="nama" required value="<?= $pelamar->nama ?>">
            <label for="nama">Nama</label>
          </div>

          <div class="input-field col s12 m6">
            <input id="nomor_ktp" type="text" name="nomor_ktp" required value="<?= $pelamar->nomor_ktp ?>">
            <label for="nomor_ktp">Nomor KTP</label>
          </div>

          <div class="input-field col s12 m6">
            <select name="agama">
              <option value="hindu" <?= $pelamar->agama == 'hindu' ? 'selected' : '' ?>>Hindu</option>
              <option value="islam" <?= $pelamar->agama == 'islam' ? 'selected' : '' ?>>Islam</option>
              <option value="katolik" <?= $pelamar->agama == 'katolik' ? 'selected' : '' ?>>Kristen Katolik</option>
              <option value="protestan" <?= $pelamar->agama == 'protestan' ? 'selected' : '' ?>>Kristen Protestan</option>
              <option value="budha" <?= $pelamar->agama == 'budha' ? 'selected' : '' ?>>Budha</option>
              <option value="konghuchu" <?= $pelamar->agama == 'konghuchu' ? 'selected' : '' ?>>Konghuchu</option>
            </select>
            <label>Agama</label>
          </div>

          <div class="input-field col s12 m6">
            <input id="tanggal_lahir" type="date" name="tanggal_lahir" required value="<?= $pelamar->taggallahir ?>">
            <label for="tanggal_lahir">Tanggal Lahir</label>
          </div>

          <div class="col s12">
            <label>Jenis Kelamin</label>
            <div>
              <label>
                <input name="jk" type="radio" value="l" <?= $pelamar->jk == 'l' ? 'checked' : '' ?> />
                <span>Laki-laki</span>
              </label>
              <label>
                <input name="jk" type="radio" value="p" <?= $pelamar->jk == 'p' ? 'checked' : '' ?> />
                <span>Perempuan</span>
              </label>
            </div>
            <br><br>
          </div>

          <div class="input-field col s12 m12">
            <textarea id="alamat" name="alamat" class="materialize-textarea" required><?= $pelamar->alamat ?></textarea>
            <label for="alamat">Alamat</label>
          </div>

          <div class="col s12 right-align">
            <input type="submit" value="Next" class="btn deep-purple">
          </div>
        </form>
      </div>

      <div id="test2" class="col s12" style="padding: 24px">
        <form action="#" class="row" id="form2">
          <div class="row">
            <div class="col s12 m6">
              <h6><b>SD</b></h6>
            </div>

            <div class="col s12 m6">
              <h6><b>SMP</b></h6>
            </div>

            <div class="input-field col s12 m3">
              <input type="hidden" name="jurusan[0]" value="">
            </div>

            <div class="input-field col s12 m3">
              <select name="tahun[0]">
                <option value="" selected>Kosong</option>
                <?php
                $thn_skr = date('Y');
                for ($x = $thn_skr; $x >= 1980; $x--) {
                ?>
                  <option value="<?= "$x/" . ($x + 1) ?>" <?= $pelamar->tahun[0] == "$x/" . ($x + 1) ? 'selected' : '' ?>><?= "$x/" . ($x + 1) ?></option>
                <?php
                }
                ?>
              </select>
              <label for="first_name">Tahun</label>
            </div>

            <!-- <div class="col s12 m4">
              <label for="file0">Berkas</label>
              <div class="input-field">
                <input id="file0" type="file" name="berkas[0]" required>
              </div>

            </div> -->


            <div class="input-field col s12 m3">
              <input type="hidden" name="jurusan[1]" value="">
            </div>

            <div class="input-field col s12 m3">
              <select name="tahun[1]">
                <option value="" selected>Kosong</option>
                <?php
                $thn_skr = date('Y');
                for ($x = $thn_skr; $x >= 1980; $x--) {
                ?>
                  <option value="<?php echo "$x/" . ($x + 1) ?>" <?= $pelamar->tahun[1] == "$x/" . ($x + 1) ? 'selected' : '' ?>><?php echo "$x/" . ($x + 1) ?></option>
                <?php
                }
                ?>
              </select>
              <label for="first_name">Tahun</label>
            </div>

            <!-- <div class="col s12 m4">
              <label for="file1">Berkas</label>
              <div class="input-field">
                <input id="file1" type="file" name="berkas[1]" required>
              </div>
            </div> -->

            <div class="col s12 m6">
              <h6><b>SMA/SMK</b></h6>
            </div>
            <div class="col s12 m6">
              <h6><b>S1</b></h6>
            </div>

            <div class="input-field col s12 m3">
              <input id="jurusan_sma" type="text" class="validate" name="jurusan[2]" value="<?= $pelamar->jurusan[2] ?>">
              <label for="jurusan_sma">Jurusan</label>
            </div>

            <div class="input-field col s12 m3">
              <select name="tahun[2]">
                <option value="" selected>Kosong</option>
                <?php
                $thn_skr = date('Y');
                for ($x = $thn_skr; $x >= 1980; $x--) {
                ?>
                  <option value="<?php echo "$x/" . ($x + 1) ?>" <?= $pelamar->tahun[2] == "$x/" . ($x + 1) ? 'selected' : '' ?>><?php echo "$x/" . ($x + 1) ?></option>
                <?php
                }
                ?>
              </select>
              <label for="first_name">Tahun</label>
            </div>

            <!-- <div class="col s12 m4">
              <label for="file2">Ijazah</label>
              <div class="input-field">
                <input id="file2" type="file" name="berkas[2]" required>
              </div>
            </div> -->


            <div class="input-field col s12 m3">
              <input id="jurusan_s1" type="text" class="validate" name="jurusan[3]" value="<?= $pelamar->jurusan[3] ?>">
              <label for="jurusan_s1">Jurusan</label>
            </div>

            <div class="input-field col s12 m3">
              <select name="tahun[3]">
                <option value="" selected>Kosong</option>
                <?php
                $thn_skr = date('Y');
                for ($x = $thn_skr; $x >= 1980; $x--) {
                ?>
                  <option value="<?php echo "$x/" . ($x + 1) ?>" <?= $pelamar->tahun[3] == "$x/" . ($x + 1) ? 'selected' : '' ?>><?php echo "$x/" . ($x + 1) ?></option>
                <?php
                }
                ?>
              </select>
              <label for="first_name">Tahun</label>
            </div>

            <!-- <div class="col s12 m4">
              <label for="file3">Ijazah</label>
              <div class="input-field">
                <input id="file3" type="file" name="berkas[3]" required>
              </div>
            </div> -->

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
                    <input name="pendidikan_non_formal[<?= $i ?>]" class="filled-in" type="checkbox" value="<?= $i ?>" <?= $pelamar->keterampilan[$i] ? 'checked' : '' ?> />
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
                <input id="pengalaman_kerja" type="number" name="pengalaman_kerja" value="<?= $pelamar->pengalaman_kerja ?>">
                <label for="pengalaman_kerja">Pengalaman Kerja (Tahun)</label>
              </div>
            </div>

            <div class="col s12 m4">
              <div class="input-field">
                <input id="gaji_diinginkan" type="number" name="gaji_diinginkan" value="<?= $pelamar->rangegaji ?>">
                <label for="gaji_diinginkan">Gaji yang diinginkan</label>
              </div>
              <br>
            </div>

            <div class="col s12 m4">
              <div class="input-field">
                <select name="spesialisasi" id="spesialisasi" class="form-control">
                  <?php foreach ($kategori as $i => $k) : ?>
                    <option value="<?= $k->kategori ?>" <?= $pelamar->jabatan_ingin == $k->kategori ? 'selected' : '' ?>><?= $k->kategori ?></option>
                  <?php endforeach ?>
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
        url: '<?= site_url('pelamar/pelamar/submitEdit') ?>',
        type: 'POST',
        data: form,
        dataType: 'json',
        cache: false,
        contentType: false,
        processData: false,
        success: function(res) {
          alert('Informasi Pelamar berhasil diedit');
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