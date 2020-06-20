<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MPelamar extends CI_Model
{

  public function signup($data)
  {
    $keterampilan = [];
    foreach ($data['pendidikan_non_formal'] as $k) {
      array_push($keterampilan, $k);
    }

    $param = new stdClass();
    $param->nama = $data['nama'];
    $param->email = $data['email'];
    $param->password = md5($data['password']);
    $param->taggallahir = $data['tanggal_lahir'];
    $param->foto = $data['foto'];
    $param->jk = $data['jk'];
    $param->alamat = $data['alamat'];
    $param->jabatan_ingin = $data['spesialisasi'];
    // $param->jabatan_pokok =
    // $param->jabatan_sampingan =
    // $param->kendala =
    // $param->keunggulan =
    // $param->tanggaldaftar =
    $param->sim = $data['nomor_ktp'];
    // $param->statsus_bekerja = 
    $param->rangegaji = $data['gaji_diinginkan'];
    $param->pengalaman_kerja = $data['pengalaman_kerja'];
    $param->agama = $data['agama'];
    $param->pendidikan = json_encode(["SD", "SMP", "SMA/SMK", "S1"]);
    $param->jurusan = json_encode($data['jurusan']);
    $param->tahun = json_encode($data['tahun']);
    $param->ijazah = json_encode($data['berkas']);
    $param->keterampilan = json_encode($keterampilan);
    // $param->kewarganegaraan =
    // $param->pekerjaan_sekarang = 
    // $param->pekerja_status
    // $param->desa
    // $param->usaha_sektor
    // $param->pekerjaan_terakhir
    // $param->pendidikan_terakhir
    // $param->pendidikannonformal
    return $this->db->insert('pelamar', $param);
  }

  public function login($data)
  {
    return $this->db->get_where('pelamar', ['email' => $data['email'], 'password' => $data['password']])->row();
  }

  public function getOne($id)
  {
    return $this->db->get_where('pelamar', ['id' => $id])->row();
  }
}
