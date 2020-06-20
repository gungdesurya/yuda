<div class="container">
  <h4>Dashboard</h4>
  <br>
  <h5>Cari Lowongan</h5>
  <div class="card">
    <div class="card-content">
      <form action="<?= site_url('lowongan') ?>" name="search-form">
        <div class="row" style="margin-bottom: 0">
          <div class="input-field col s12 m4">
            <select>
              <option value="" disabled selected>Choose your option</option>
              <option value="1">Option 1</option>
              <option value="2">Option 2</option>
              <option value="3">Option 3</option>
            </select>
            <label>Kategori</label>
          </div>
          <div class="input-field col s12 m6">
            <input placeholder="Cari..." id="first_name" type="text" class="validate">
            <label for="first_name">Cari</label>
          </div>
          <div class="input-field col s12 m2">
            <button type="submit" class="waves-effect waves-light btn deep-orange">Cari</button>
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
          <div class="col s4 m2">
            <img class="gambar-perusahaan" src="<?= site_url('/assets/images/person_6.jpg') ?>" style="width: 100%">
          </div>
          <div class="col s8 m10">
            <a class="card-title" href="<?= site_url('lowongan/detail/' . $l->id) ?>"><?= $l->nama_loker ?></a>
            <div class="perusahaan"><a href="<?= site_url('perusahaan/detail/' . $l->id_perusahaan) ?>"><?= $l->nama_perusahaan ?></a></div>
            <div class="pengalaman">Min Pengalaman: <?= $l->pengalaman_kerja ?> Tahun</div>
            <div class="gaji">Gaji Rp. <?= $l->range_gaji ?></div>

            <div class="chipslist">
              <div class="chip deep-purple darken-1 white-text"><?= $l->pendidikan ?></div>
              <?php if ($l->jurusan) : ?>
                <div class="chip deep-purple darken-1 white-text"><?= $l->jurusan ?></div>
              <?php endif ?>
              <div class="chip deep-purple darken-1 white-text"><?= $l->kategori ?></div>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>