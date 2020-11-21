<div class="home-container">
  <div>&nbsp;</div>
  <div class="card home-search-form">
    <div class="card-content">
      <form action="<?= site_url('lowongan') ?>" id="searchform">
        <div class="row" style="margin-bottom: 0">
          <div class="input-field col s12">
            <select name="kategori">
              <option value="" selected>Select All</option>
              <?php foreach ($kategori as $i => $k) : ?>
                <option value="<?= $k->kategori ?>"><?= $k->kategori ?></option>
              <?php endforeach ?>
            </select>
            <label>Kategori</label>
          </div>
          <!-- <div class="input-field col s12 m8">
            <input placeholder="Cari..." name="nama" id="nama" type="text" class="validate">
            <label for="nama">Cari Jurusan</label>
          </div> -->

        </div>
      </form>
    </div>
    <div class="card-action">
      <button type="submit" form="searchform" class="waves-effect waves-light btn blue">Cari Lowongan</button>
    </div>
  </div>
</div>