<div class="container">
  <h4><?= $perusahaan->nama_perusahaan ?></h4>
  <div class="jenis-perusahaan"><?= $perusahaan->jenis_perusahaan ?></div>
  <div class="alamat">Lokasi: <?= "$perusahaan->pen_provinsi, $perusahaan->pen_kota ($perusahaan->pen_kodepos)" ?></div>
  <br>

  <h5>Daftar Lowongan</h5>
  <div class="lowongan-list card">
    <?php foreach ($lowongan as $l) : ?>
      <div class="card-content">
        <div class="row">
          <div class="col s12 m8">
            <a class="card-title" href="<?= site_url('lowongan/detail/' . $l->id) ?>"><?= $l->kategori ?></a>
            <div class="gaji">Gaji Rp. <?= $l->range_gaji_dari ?> - Rp. <?= $l->range_gaji_sampai ?></div>

            <div class="chipslist">
              <?php if ($l->pendidikan_minimal) : ?>
                <div class="chip deep-purple darken-1 white-text"><?= $l->pendidikan_minimal ?></div>
              <?php endif ?>
              <?php if ($l->low_jurusan) : ?>
                <div class="chip deep-purple darken-1 white-text"><?= $l->low_jurusan ?></div>
              <?php endif ?>
              <div class="chip deep-purple darken-1 white-text"><?= $l->kategori ?></div>
            </div>
          </div>
          <div class="col s12 m4 right-align">
            <div class="label-right-text">Sampai: <?= date("d M Y", strtotime($l->low_tanggal_berakhir)) ?></div>
            <div class="label-right-text"><?= $l->low_jumlah_tenaga ?> Lowongan</div>
          </div>
        </div>
      </div>
    <?php endforeach ?>

    <?php if (sizeof($lowongan) == 0) : ?>
      <div class="card-content no-content">
        <i class="far fa-address-card"></i>
        <span class="message">Tidak ada lowongan.<br> Silahkan klik buat lowongan untuk membuat lowongan baru</span>
      </div>
    <?php endif ?>
  </div>
</div>