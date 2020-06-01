<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MLowongan extends CI_Model
{

  public function create($data)
  {
    $param = new stdClass();
    $param->nama_loker = $data['nama_loker'];
    $param->id_perusahaan = $data['id_perusahaan'];
    $param->deskripsi = $data['deskripsi'];
    $param->range_gaji = $data['range_gaji'];
    $param->deskripsi = $data['deskripsi'];
    $param->keterampilan = $data['keterampilan'];
    $param->pendidikan = $data['pendidikan'];
    $param->jurusan = $data['jurusan'];
    $param->pengalaman_kerja = $data['pengalaman_kerja'];
    $param->kategori_pekerjaan = $data['kategori_pekerjaan'];

    return $this->db->insert('lowongan', $param);
  }

  public function edit($data, $id)
  {
    $param = new stdClass();
    $param->nama_loker = $data['nama_loker'];
    $param->deskripsi = $data['deskripsi'];
    $param->range_gaji = $data['range_gaji'];
    $param->deskripsi = $data['deskripsi'];
    $param->keterampilan = $data['keterampilan'];
    $param->pendidikan = $data['pendidikan'];
    $param->jurusan = $data['jurusan'];
    $param->pengalaman_kerja = $data['pengalaman_kerja'];
    $param->kategori_pekerjaan = $data['kategori_pekerjaan'];

    $this->db->where('id', $id);
    return $this->db->update('lowongan', $param);
  }

  public function getLowonganPerusahaan($id)
  {
    return $this->db->get_where('lowongan', ['id_perusahaan' => $id])->result();
  }

  public function getOne($id)
  {
    return $this->db->get_where('lowongan', ['id' => $id])->row();
  }
}
