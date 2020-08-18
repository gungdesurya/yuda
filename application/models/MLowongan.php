<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MLowongan extends CI_Model
{

  public function create($data)
  {
    $keterampilan = [];
    foreach ($data['keterampilan'] as $k) {
      array_push($keterampilan, $k);
    }

    $rangeGaji = explode(' - ', $data['range_gaji']);

    $start_date = date(time());
    // echo $start_date;
    $end_date = strtotime($data['low_tanggal_berakhir']);
    $lowongan_berakhir = ceil(($end_date - $start_date) / 60 / 60 / 24);

    $param = new stdClass();
    $param->id_perusahaan = $data['id_perusahaan'];
    $param->kategori = $data['kategori'];
    $param->range_gaji_dari = $rangeGaji[0];
    $param->range_gaji_sampai = $rangeGaji[1];
    $param->keterampilan = json_encode($keterampilan);
    $param->jenis_gaji = $data['jenis_gaji'];
    $param->status_pekerjaan = $data['status_pekerjaan'];
    $param->pendidikan_minimal = $data['pendidikan_minimal'];
    if ($data['pendidikan_minimal'] == 'S1' or $data['pendidikan_minimal'] == 'SMA/SMK') $param->low_jurusan = $data['low_jurusan'];
    $param->low_lokasi = $data['low_lokasi'];
    $param->low_status_gender = $data['low_status_gender'];
    if ($param->low_status_gender == 'dengan gender') {
      $param->low_jumlah_tenaga_laki = $data['low_jumlah_tenaga_laki'];
      $param->low_jumlah_tenaga_perempuan = $data['low_jumlah_tenaga_perempuan'];
      $param->low_jumlah_tenaga = $data['low_jumlah_tenaga_perempuan'] + $data['low_jumlah_tenaga_laki'];
    } else {
      $param->low_jumlah_tenaga = $data['low_jumlah_tenaga'];
    }
    $param->low_deskripsi = $data['low_deskripsi'];
    $param->low_tanggal = date('Y-m-d', $start_date);
    // echo date('Y-m-d', time());
    $param->low_tanggal_berakhir = $data['low_tanggal_berakhir'];
    $param->low_masa_berlaku = $lowongan_berakhir;

    return $this->db->insert('lowongan', $param);
  }

  public function edit($data, $id)
  {
    $keterampilan = [];
    foreach ($data['keterampilan'] as $k) {
      array_push($keterampilan, $k);
    }

    $param = new stdClass();
    $param->nama_loker = $data['nama_loker'];
    $param->deskripsi = $data['deskripsi'];
    $param->range_gaji = $data['range_gaji'];
    $param->deskripsi = $data['deskripsi'];
    $param->keterampilan = json_encode($keterampilan);
    $param->pendidikan = $data['pendidikan'];
    if ($data['pendidikan'] == 'S1') $param->jurusan = $data['jurusan'];
    $param->pengalaman_kerja = $data['pengalaman_kerja'];
    $param->kategori_pekerjaan = $data['kategori_pekerjaan'];

    $this->db->where('id', $id);
    return $this->db->update('lowongan', $param);
  }

  public function getLowonganPerusahaan($id)
  {
    return $this->db
      // ->select('lowongan.*, perusahaan.nama_perusahaan, kategori.kategori')
      ->where('perusahaan.id_perusahaan', $id)
      ->join('perusahaan', 'perusahaan.id_perusahaan = lowongan.id_perusahaan')
      // ->join('kategori', 'kategori.id = lowongan.kategori')
      ->get('lowongan')
      ->result();
  }

  public function getLowongan($nama = '', $kategori = '')
  {
    $where = "low_jurusan like '%$nama%' AND low_tanggal_berakhir >= '2020-01-01'";
    // $where = "low_jurusan like '%$nama%' AND low_tanggal_berakhir >= CURRENT_TIMESTAMP()";
    if ($kategori != '') $where .= " AND kategori = '$kategori'";
    return $this->db
      ->select('lowongan.*, perusahaan.nama_perusahaan')
      ->where($where)
      ->join('perusahaan', 'perusahaan.id_perusahaan = lowongan.id_perusahaan')
      ->get('lowongan')
      ->result();
  }

  public function getOne($id)
  {
    $lowongan = $this->db
      ->select('lowongan.*, perusahaan.nama_perusahaan')
      ->where('lowongan.id', $id)
      ->join('perusahaan', 'perusahaan.id_perusahaan = lowongan.id_perusahaan')
      ->get('lowongan')
      ->row();

    $lowongan->range_gaji = "$lowongan->range_gaji_dari - $lowongan->range_gaji_sampai";
    return $lowongan;
  }

  public function delete($id)
  {
    $this->db->where('id', $id);
    return $this->db->delete('lowongan');
  }
}
