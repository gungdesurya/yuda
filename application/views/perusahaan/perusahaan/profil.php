<div class="container">
  <h4>Profil Perusahaan</h4>
  <br>
  <div class="lowongan-detail card">
    <div class="card-content">
      <div class="row">
        <div class="col s12 m8">
          <div class="row">
            <div class="col s12 m3">
              <img class="gambar-perusahaan" src="<?= site_url('/uploads/logo/' . $perusahaan->logo) ?>" alt="">
            </div>
            <div class="col s12 m9">
              <span class="card-title"><?= $perusahaan->nama_perusahaan ?></span>
              <div class="perusahaan">Alamat: <?= "$perusahaan->alamat, $perusahaan->kabupaten, $perusahaan->provinsi ($perusahaan->kode_pos)" ?></div>
              <div class="right-align">
                <a href="<?= site_url('perusahaan-s/perusahaan/edit') ?>" class="btn deep-purple">Edit Profil</a>
              </div>
            </div>
          </div>

          <div class="label-section">Tentang Kami</div>
          <div class="deskripsi"><?= $perusahaan->deskripsi ?></div>

          <div class="divider"></div>
          <div class="label-section">Izin Perusahaan</div>
          <ul class="browser-default">
            <li><a href="<?= site_url('uploads/file_perusahaan/' . $perusahaan->akta_pendirian_perusahaan) ?>" target="_blank">Akta Pendirian Perusahaan</a></li>
            <li><a href="<?= site_url('uploads/file_perusahaan/' . $perusahaan->siup) ?>" target="_blank">SIUP</a></li>
            <li><a href="<?= site_url('uploads/file_perusahaan/' . $perusahaan->tdp) ?>" target="_blank">TDP</a></li>
            <li><a href="<?= site_url('uploads/file_perusahaan/' . $perusahaan->situ) ?>" target="_blank">SITU</a></li>
            <li><a href="<?= site_url('uploads/file_perusahaan/' . $perusahaan->izin_lainnya) ?>" target="_blank">Izin Lainnya</a></li>
          </ul>
        </div>
        <div class="col s12 m4 blue-grey lighten-5 side-detail">
          <div class="label-section">Informasi</div>
          <div class="kategori">No HP: <?= $perusahaan->no_hp ?></div>
          <div class="kategori">Nama Kontak: <?= $perusahaan->nama_kontak ?></div>
          <div class="kategori">Jabatan: <?= $perusahaan->jabatan_perusahaan ?></div>
        </div>
      </div>

    </div>
  </div>
  <br>

  <div class="row">
    <div class="col s6">
      <h5>Lowongan Anda</h5>
    </div>
    <div class="col s6 right-align">
      <a href="<?= site_url('perusahaan-s/Lowongan/create') ?>" class="btn deep-purple">Buat Lowongan</a>
    </div>
  </div>
  <div class="lowongan-list card">
    <?php foreach ($lowongan as $l) : ?>
      <div class="card-content">
        <div class="row">
          <div class="col s4 m2">
            <img class="gambar-perusahaan" src="<?= site_url('/uploads/logo/' . $perusahaan->logo) ?>" style="width: 100%">
          </div>
          <div class="col s6 m8">
            <a class="card-title" href="<?= site_url('lowongan/detail/' . $l->id) ?>"><?= $l->nama_loker ?></a>
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
          <div class="col s2 right-align">
            <a class="btn deep-purple" href="<?= site_url('perusahaan-s/Lowongan/edit/' . $l->id) ?>">Edit</a>
            <br><br>
            <button class="btn red" onclick="onDelete(<?= $l->id ?>)">Hapus</button>
          </div>
        </div>
      </div>
    <?php endforeach ?>
  </div>

  <script>
    function onDelete(id) {
      const confirms = confirm("Hapus Lowongan ini?");
      if (confirms) window.location = '<?= site_url('perusahaan-s/Lowongan/delete/') ?>' + id
    }
  </script>