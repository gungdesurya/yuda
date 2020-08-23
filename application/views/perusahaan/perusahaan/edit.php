<div class="container">
  <h4>Edit Informasi Perusahaan</h4>
  <br>
  <div class="card" style="padding: 24px;">

    <form class="row" action="<?= site_url('perusahaan-s/perusahaan/editPerusahaan') ?>" method="POST">
      <div class="input-field col s12">
        <input id="nama_perusahaan" type="text" name="nama_perusahaan" required value="<?= $perusahaan->nama_perusahaan ?>">
        <label for="nama_perusahaan">Nama Perusahaan</label>
      </div>

      <div class="input-field col s12 m6 l4">
        <select name="jenis_perusahaan" id="jenis_perusahaan">
          <option value="Instansi / Pemerintah / BUMN" <?= $perusahaan->jenis_perusahaan == "Instansi / Pemerintah / BUMN" ? 'selected' : '' ?>>Instansi / Pemerintah / BUMN</option>
          <option value="Swasta Lokal" <?= $perusahaan->jenis_perusahaan == "Swasta Lokal" ? 'selected' : '' ?>>Swasta Lokal</option>
          <option value="Swasta Asing" <?= $perusahaan->jenis_perusahaan == "Swasta Asing" ? 'selected' : '' ?>>Swasta Asing</option>
          <option value="Umum/Perorangan" <?= $perusahaan->jenis_perusahaan == "Umum/Perorangan" ? 'selected' : '' ?>>Umum/Perorangan</option>
          <option value="Umum/Kelompok Organisasi" <?= $perusahaan->jenis_perusahaan == "Umum/Kelompok Organisasi" ? 'selected' : '' ?>>Umum/Kelompok Organisasi</option>
          <option value="PPTKIS" <?= $perusahaan->jenis_perusahaan == "PPTKIS" ? 'selected' : '' ?>>PPTKIS</option>
          <option value="LPK" <?= $perusahaan->jenis_perusahaan == "LPK" ? 'selected' : '' ?>>LPK</option>
        </select>
        <label for="jenis_perusahaan">Jenis Perusahaan</label>
      </div>

      <div class="input-field col s12 m6 l2">
        <input id="pen_kodepos" type="number" name="pen_kodepos" required value="<?= $perusahaan->pen_kodepos ?>">
        <label for="pen_kodepos">Kode Pos</label>
      </div>

      <div class="input-field col s12 m6 l3">
        <input id="pen_provinsi" type="text" name="pen_provinsi" required value="<?= $perusahaan->pen_provinsi ?>">
        <label for="pen_provinsi">Provinsi</label>
      </div>

      <div class="input-field col s12 m6 l3">
        <input id="pen_kota" type="text" name="pen_kota" required value="<?= $perusahaan->pen_kota ?>">
        <label for="pen_kota">Kota</label>
      </div>

      <div class="col s12 right-align">
        <input type="submit" value="Edit" class="btn deep-purple">
      </div>
    </form>

  </div>