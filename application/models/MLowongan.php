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

    $param = new stdClass();
    $param->nama_loker = $data['nama_loker'];
    $param->id_perusahaan = $data['id_perusahaan'];
    $param->deskripsi = $data['deskripsi'];
    $param->range_gaji = $data['range_gaji'];
    $param->deskripsi = $data['deskripsi'];
    $param->keterampilan = json_encode($keterampilan);
    $param->pendidikan = $data['pendidikan'];
    if ($data['pendidikan'] == 'S1') $param->jurusan = $data['jurusan'];
    $param->pengalaman_kerja = $data['pengalaman_kerja'];
    $param->kategori_pekerjaan = $data['kategori_pekerjaan'];

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
      ->select('lowongan.*, perusahaan.nama_perusahaan, kategori.kategori')
      ->where('id_perusahaan', $id)
      ->join('perusahaan', 'perusahaan.id = lowongan.id_perusahaan')
      ->join('kategori', 'kategori.id = lowongan.kategori_pekerjaan')
      ->get('lowongan')
      ->result();
  }

  public function getLowongan($nama = '', $kategori = '')
  {
    $where = "nama_loker like '%$nama%'";
    if ($kategori != '') $where .= " AND kategori_pekerjaan = $kategori";
    return $this->db
      ->select('lowongan.*, perusahaan.nama_perusahaan, kategori.kategori')
      ->where($where)
      ->join('perusahaan', 'perusahaan.id = lowongan.id_perusahaan')
      ->join('kategori', 'kategori.id = lowongan.kategori_pekerjaan')
      ->get('lowongan')
      ->result();
  }

  public function getOne($id)
  {
    return $this->db
      ->select('lowongan.*, perusahaan.nama_perusahaan, kategori.kategori')
      ->where('lowongan.id', $id)
      ->join('perusahaan', 'perusahaan.id = lowongan.id_perusahaan')
      ->join('kategori', 'kategori.id = lowongan.kategori_pekerjaan')
      ->get('lowongan')
      ->row();
  }

  public function delete($id)
  {
    $this->db->where('id', $id);
    return $this->db->delete('lowongan');
  }
}
