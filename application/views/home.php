<div class="home-container">
  <div>&nbsp;</div>
  <div class="card home-search-form">
    <div class="card-content">
      <form action="<?= site_url('lowongan') ?>" id="search-form" name="search-form">
        <div class="row" style="margin-bottom: 0">
          <div class="input-field col s6 ">
            <select>
              <option value="" disabled selected>Choose your option</option>
              <option value="1">Option 1</option>
              <option value="2">Option 2</option>
              <option value="3">Option 3</option>
            </select>
            <label>Kategori</label>
          </div>
          <div class="input-field col s6">
            <input placeholder="Cari..." id="first_name" type="text" class="validate">
            <label for="first_name">Cari</label>
          </div>

        </div>
      </form>
    </div>
    <div class="card-action">
      <button type="submit" form="search-form" class="waves-effect waves-light btn deep-orange">Cari Lowongan</button>
    </div>
  </div>
</div>