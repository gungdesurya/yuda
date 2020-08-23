<div class="container">
  <h4>Daftar Perusahaan</h4>
  <br>
  <div class="card" style="padding: 24px;">

    <form class="row" action="<?= site_url('Daftar/submitPerusahaan') ?>" method="POST">
      <div class="input-field col s12 m6">
        <input id="nama_perusahaan" type="text" name="nama_perusahaan" required>
        <label for="nama_perusahaan">Nama Perusahaan</label>
      </div>

      <div class="input-field col s12 m6">
        <input id="email" type="email" name="email" required>
        <label for="email">Email</label>
      </div>

      <div class="input-field col s6">
        <input id="password" type="password" name="password" required>
        <label for="password">Password</label>
      </div>

      <div class="input-field col s6">
        <input id="confirm_password" type="password" name="confirm_password" required>
        <label for="confirm_password">Ulangi Password</label>
      </div>

      <div class="input-field col s12 m6 l4">
        <select name="jenis_perusahaan" id="jenis_perusahaan">
          <option value="Instansi / Pemerintah / BUMN" selected>Instansi / Pemerintah / BUMN</option>
          <option value="Swasta Lokal">Swasta Lokal</option>
          <option value="Swasta Asing">Swasta Asing</option>
          <option value="Umum/Perorangan">Umum/Perorangan</option>
          <option value="Umum/Kelompok Organisasi">Umum/Kelompok Organisasi</option>
          <option value="Umum/Kelompok Organisasi">Umum/Kelompok Organisasi</option>
          <option value="PPTKIS">PPTKIS</option>
          <option value="LPK">LPK</option>
        </select>
        <label for="jenis_perusahaan">Jenis Perusahaan</label>
      </div>

      <div class="input-field col s12 m6 l2">
        <input id="pen_kodepos" type="number" name="pen_kodepos" required>
        <label for="pen_kodepos">Kode Pos</label>
      </div>

      <div class="input-field col s12 m6 l3">
        <input id="pen_provinsi" type="text" name="pen_provinsi" required>
        <label for="pen_provinsi">Provinsi</label>
      </div>

      <div class="input-field col s12 m6 l3">
        <input id="pen_kota" type="text" name="pen_kota" required>
        <label for="pen_kota">Kota</label>
      </div>

      <div class="col s12 right-align">
        <input type="submit" value="Daftar" class="btn deep-purple">
      </div>
    </form>

  </div>