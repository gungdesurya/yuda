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
              <span class="card-title"><?= $lowongan->kategori ?></span>
              <div class="perusahaan"><a href="<?= site_url('perusahaan/detail/' . $perusahaan->id_perusahaan) ?>"><?= $lowongan->nama_perusahaan ?></a></div>
              <div>Gaji: Rp. <?= $lowongan->range_gaji_dari ?> - <?= $lowongan->range_gaji_sampai ?> <i>(<?= $lowongan->jenis_gaji ?>)</i></div>
            </div>
          </div>
          <br>

          <div class="label-section">Deskripsi Lowongan</div>
          <div class="deskripsi"><?= $lowongan->low_deskripsi ?></div>

          <!-- <div class="label-section">Pendidikan Non-Formal</div>
          <ol>
            <?php foreach ($pendidikanNonFormal as $key => $p) : ?>
              <li><?= $p->nama_pendidikan ?></li>
            <?php endforeach ?>
          </ol> -->


          <div class="divider"></div>
          <div class="label-section">Perusahaan</div>
          <div class="perusahaan-detail">
            <div class="pengalaman">Lokasi: <?= "$perusahaan->pen_provinsi, $perusahaan->pen_kota ($perusahaan->pen_kodepos)" ?></div>
          </div>
        </div>
        <div class="col s12 m4 blue-grey lighten-5 side-detail">
          <div class="label-section">Lowongan</div>
          <div class="pendidikan">Status Pekerjaan: <b><?= $lowongan->status_pekerjaan ?></b></div>
          <div class="pendidikan">Pendidikan: <b><?= $lowongan->pendidikan_minimal ?></b></div>
          <?php if ($lowongan->low_jurusan) : ?>
            <div class="jurusan">Jurusan: <b><?= $lowongan->low_jurusan ?></b></div>
          <?php endif ?>
          <div class="kategori">Kategori: <b><?= $lowongan->kategori ?></b></div>
          <div class="kategori">Lokasi: <b><?= $lowongan->low_lokasi ?></b></div>
          <div class="kategori">Masa Berlaku: <b><?= date("d M Y", strtotime($lowongan->low_tanggal_berakhir)) ?></b></div>
          <br>

          <div class="kategori">Dicari: <b><?= $lowongan->low_jumlah_tenaga ?> Orang</b></div>
          <?php if ($lowongan->low_jumlah_tenaga_laki > 0) : ?>
            <div class="kategori">Pria: <b><?= $lowongan->low_jumlah_tenaga_laki ?> Orang</b></div>
          <?php endif ?>
          <?php if ($lowongan->low_jumlah_tenaga_perempuan > 0) : ?>
            <div class="kategori">Wanita: <b><?= $lowongan->low_jumlah_tenaga_perempuan ?> Orang</b></div>
          <?php endif ?>
        </div>
      </div>

    </div>
  </div>
</div>