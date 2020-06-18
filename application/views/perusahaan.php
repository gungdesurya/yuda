<br><br>
<div class="container">
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

  <h5>Daftar Lowongan</h5>
  <div class="lowongan-list card">
    <?php foreach ($lowongan as $l) : ?>
      <div class="card-content">
        <div class="row">
          <div class="col s4 m2">
            <img class="gambar-perusahaan" src="<?= site_url('/assets/images/person_6.jpg') ?>" style="width: 100%">
          </div>
          <div class="col s8 m10">
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
        </div>
      </div>
    <?php endforeach ?>
  </div>
</div>