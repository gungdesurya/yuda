<div class="perusahaan-detail container">
  <div class="row">
    <div class="col s12 m8">
      <h4><?= $perusahaan->nama_perusahaan ?></h4>
      <div class="jenis-perusahaan"><?= $perusahaan->jenis_perusahaan ?></div>
      <div class="alamat">Lokasi: <?= "$perusahaan->pen_provinsi, $perusahaan->pen_kota ($perusahaan->pen_kodepos)" ?></div>
    </div>
    <div class="col s12 m4 right-align">
      <br><br>
      <a href="<?= site_url('perusahaan-s/perusahaan/edit') ?>" class="btn blue darken-3">Edit Profil</a>
    </div>
  </div>
  <br>

  <div class="row">
    <div class="col s6">
      <h5>Lowongan Anda</h5>
    </div>
    <div class="col s6 right-align">
      <a href="<?= site_url('perusahaan-s/Lowongan/create') ?>" class="btn blue darken-3">Buat Lowongan</a>
    </div>
  </div>
  <div class="lowongan-list card">
    <?php foreach ($lowongan as $l) : ?>
      <div class="card-content">
        <div class="row">
          <div class="col s12 m8">
            <a class="card-title" href="<?= site_url('lowongan/detail/' . $l->id) ?>"><?= $l->kategori ?></a>
            <div class="gaji">Gaji Rp. <?= $l->range_gaji_dari ?> - <?= $l->range_gaji_sampai ?></div>

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
            <a class="btn blue darken-3" href="<?= site_url('perusahaan-s/Lowongan/edit/' . $l->id) ?>">Edit</a>
            <button class="btn red" onclick="onDelete(<?= $l->id ?>)">Hapus</button>

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

  <script>
    function onDelete(id) {
      const confirms = confirm("Hapus Lowongan ini?");
      if (confirms) window.location = '<?= site_url('perusahaan-s/Lowongan/delete/') ?>' + id
    }
  </script>