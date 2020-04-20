<div class="container">
  <h4>Daftar Lowongan</h4>
  <br>
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

  <div class="lowongan-list card">

    <div class="card-content">
      <div class="row">
        <div class="col s4 m2">
          <img class="gambar-perusahaan" src="<?= site_url('/assets/images/person_6.jpg') ?>" style="width: 100%">
        </div>
        <div class="col s8 m10">
          <a class="card-title" href="<?= site_url('lowongan/detail') ?>">Restaurant Team Member - Crew</a>
          <div class="perusahaan"><a href="<?= site_url('perusahaan/detail') ?>">PT. Perusahaan</a></div>
          <div class="pengalaman">Min Pengalaman: 1 Tahun</div>

          <div class="chipslist">
            <div class="chip deep-purple darken-1 white-text">S1</div>
            <div class="chip deep-purple darken-1 white-text">Ilmu Komputer</div>
            <div class="chip deep-purple darken-1 white-text">Administrasi</div>
          </div>
        </div>
      </div>
    </div>

    <div class="card-content">
      <div class="row">
        <div class="col s4 m2">
          <img class="gambar-perusahaan" src="<?= site_url('/assets/images/person_6.jpg') ?>" style="width: 100%">
        </div>
        <div class="col s8 m10">
          <a class="card-title" href="<?= site_url('lowongan/detail') ?>">Restaurant Team Member - Crew</a>
          <div class="perusahaan"><a href="<?= site_url('perusahaan/detail') ?>">PT. Perusahaan</a></div>
          <div class="pengalaman">Min Pengalaman: 1 Tahun</div>

          <div class="chipslist">
            <div class="chip deep-purple darken-1 white-text">S1</div>
            <div class="chip deep-purple darken-1 white-text">Ilmu Komputer</div>
            <div class="chip deep-purple darken-1 white-text">Administrasi</div>
          </div>
        </div>
      </div>
    </div>

    <div class="card-content">
      <div class="row">
        <div class="col s4 m2">
          <img class="gambar-perusahaan" src="<?= site_url('/assets/images/person_6.jpg') ?>" style="width: 100%">
        </div>
        <div class="col s8 m10">
          <a class="card-title" href="<?= site_url('lowongan/detail') ?>">Restaurant Team Member - Crew</a>
          <div class="perusahaan"><a href="<?= site_url('perusahaan/detail') ?>">PT. Perusahaan</a></div>
          <div class="pengalaman">Min Pengalaman: 1 Tahun</div>

          <div class="chipslist">
            <div class="chip deep-purple darken-1 white-text">S1</div>
            <div class="chip deep-purple darken-1 white-text">Ilmu Komputer</div>
            <div class="chip deep-purple darken-1 white-text">Administrasi</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>