<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MPelamar extends CI_Model
{

  public function signup($data)
  {
    $keterampilan = [];
    for ($i = 0; $i < 16; $i++) $keterampilan[$i] = false;

    foreach ($data['pendidikan_non_formal'] as $k) $keterampilan[$k] = true;

    $param = new stdClass();
    $param->nama = $data['nama'];
    $param->email = $data['email'];
    $param->password = md5($data['password']);
    $param->taggallahir = $data['tanggal_lahir'];
    $param->jk = $data['jk'];
    $param->alamat = $data['alamat'];
    $param->jabatan_ingin = $data['spesialisasi'];
    $param->nomor_ktp = $data['nomor_ktp'];
    $param->nomor_hp = $data['nomor_hp'];
    $param->rangegaji = $data['gaji_diinginkan'];
    $param->pengalaman_kerja = $data['pengalaman_kerja'];
    $param->agama = $data['agama'];
    $param->pendidikan = json_encode(["SD", "SMP", "SMA/SMK", "D1", "D2", "D3", "S1"]);
    $param->jurusan = json_encode($data['jurusan']);
    $param->tahun = json_encode($data['tahun']);
    $param->keterampilan = json_encode($keterampilan);
    return $this->db->insert('pelamar', $param);
  }

  public function edit($data, $id)
  {
    $keterampilan = [];
    for ($i = 0; $i < 16; $i++) $keterampilan[$i] = false;

    foreach ($data['pendidikan_non_formal'] as $k) $keterampilan[$k] = true;

    $param = new stdClass();
    $param->nama = $data['nama'];
    $param->taggallahir = $data['tanggal_lahir'];
    $param->jk = $data['jk'];
    $param->alamat = $data['alamat'];
    $param->jabatan_ingin = $data['spesialisasi'];
    $param->nomor_ktp = $data['nomor_ktp'];
    $param->nomor_hp = $data['nomor_hp'];
    $param->rangegaji = $data['gaji_diinginkan'];
    $param->pengalaman_kerja = $data['pengalaman_kerja'];
    $param->agama = $data['agama'];
    $param->pendidikan = json_encode(["SD", "SMP", "SMA/SMK", "S1"]);
    $param->jurusan = json_encode($data['jurusan']);
    $param->tahun = json_encode($data['tahun']);
    $param->keterampilan = json_encode($keterampilan);
    $this->db->where('id', $id);
    return $this->db->update('pelamar', $param);
  }

  public function login($data)
  {
    return $this->db->get_where('pelamar', ['email' => $data['email'], 'password' => $data['password']])->row();
  }

  public function getOne($id)
  {
    $pelamar = $this->db->get_where('pelamar', ['id' => $id])->row();
    $pelamar->tahun = json_decode($pelamar->tahun);
    $pelamar->jurusan = json_decode($pelamar->jurusan);
    $pelamar->keterampilan = json_decode($pelamar->keterampilan);
    return $pelamar;
  }
}
