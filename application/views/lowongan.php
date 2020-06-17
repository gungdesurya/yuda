<br><br>
<div class="container">
  <div class="lowongan-detail card">
    <div class="card-content">
      <div class="row">
        <div class="col s12 m8">
          <div class="row">
            <div class="col s3">
              <img class="gambar-perusahaan" src="<?= site_url('/assets/images/person_6.jpg') ?>" style="width: 100%">
            </div>
            <div class="col s9">
              <span class="card-title"><?= $lowongan->nama_loker ?></span>
              <div class="perusahaan"><a href="<?= site_url('perusahaan/detail/' . $perusahaan->id) ?>"><?= $lowongan->nama_perusahaan ?></a></div>
              <div>Gaji: Rp. <?= $lowongan->range_gaji ?></div>
            </div>
          </div>
          <br>

          <div class="label-section">Deskripsi Lowongan</div>
          <div class="deskripsi"><?= $lowongan->deskripsi ?></div>

          <div class="label-section">Pendidikan Non-Formal</div>
          <ol>
            <?php foreach ($pendidikanNonFormal as $key => $p) : ?>
              <li><?= $p->nama_pendidikan ?></li>
            <?php endforeach ?>
          </ol>


          <div class="divider"></div>
          <div class="label-section">Perusahaan</div>
          <div class="perusahaan-detail">
            <div class="pengalaman">Alamat: <?= $perusahaan->alamat ?></div>
            <div class="pendidikan">No HP: <?= $perusahaan->no_hp ?> (<?= $perusahaan->nama_kontak ?>)</div>
          </div>
        </div>
        <div class="col s12 m4 blue-grey lighten-5 side-detail">
          <div class="label-section">Lowongan</div>
          <div class="pengalaman">Min Pengalaman: <b><?= $lowongan->pengalaman_kerja ?> Tahun</b></div>
          <div class="pendidikan">Pendidikan: <b><?= $lowongan->pendidikan ?></b></div>
          <?php if ($lowongan->jurusan) : ?>
            <div class="jurusan">Jurusan: <b><?= $lowongan->jurusan ?></b></div>
          <?php endif ?>
          <div class="kategori">Kategori: <b><?= $lowongan->kategori ?></b></div>
        </div>
      </div>

    </div>
  </div>
</div>