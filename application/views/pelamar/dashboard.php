<div class="container">
  <div class="row">
    <div class="col s6">
      <h4>Dashboard</h4>
    </div>
    <div class="col s6 right-align">
      <br><br>
      <a href="<?= site_url('pelamar/pelamar/edit') ?>" class="btn blue">Edit Profil</a>
    </div>
  </div>

  <br>
  <h5>Cari Lowongan</h5>
  <div class="card">
    <div class="card-content">
      <form action="<?= site_url('lowongan') ?>">
        <div class="row" style="margin-bottom: 0">
          <div class="input-field col s12 m10">
            <select name="kategori">
              <option value="" selected>Select All</option>
              <?php foreach ($kategori as $i => $k) : ?>
                <option value="<?= $k->kategori ?>"><?= $k->kategori ?></option>
              <?php endforeach ?>
            </select>
            <label>Kategori</label>
          </div>
          <!-- <div class="input-field col s12 m6">
            <input placeholder="Cari..." name="nama" id="nama" type="text" class="validate">
            <label for="nama">Cari Jurusan</label>
          </div> -->
          <div class="input-field col s12 m2">
            <button type="submit" class="waves-effect waves-light btn blue">Cari</button>
          </div>

        </div>
      </form>
    </div>
  </div>
  <br>

  <h5>Rekomendasi Lowongan</h5>
  <div class="lowongan-list card">

    <?php foreach ($lowongan as $l) : ?>
      <div class="card-content">
        <div class="row">
          <div class="col s12 m8">
            <a class="card-title" href="<?= site_url('lowongan/detail/' . $l->id) ?>"><?= $l->kategori ?></a>
            <div class="perusahaan"><a href="<?= site_url('perusahaan/detail/' . $l->id_perusahaan) ?>"><?= $l->nama_perusahaan ?></a></div>
            <div class="gaji">Gaji Rp. <?= $l->range_gaji_dari ?> - Rp. <?= $l->range_gaji_sampai ?></div>

            <div class="chipslist">
              <?php if ($l->pendidikan_minimal) : ?>
                <div class="chip blue darken-3 white-text"><?= $l->pendidikan_minimal ?></div>
              <?php endif ?>
              <?php if ($l->low_jurusan) : ?>
                <div class="chip blue darken-3 white-text"><?= $l->low_jurusan ?></div>
              <?php endif ?>
              <div class="chip blue darken-3 white-text"><?= $l->kategori ?></div>
            </div>
          </div>
          <div class="col s12 m4 right-align">
            <div class="label-right-text">Sampai: <?= date("d M Y", strtotime($l->low_tanggal_berakhir)) ?></div>
            <div class="label-right-text"><?= $l->low_jumlah_tenaga ?> Lowongan</div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>