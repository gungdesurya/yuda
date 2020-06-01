<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MPelamar extends CI_Model
{

  public function signup($data)
  {
    $param = new stdClass();
    $param->nama = $data['nama'];
    $param->email = $data['email'];
    $param->password = md5($data['password']);
    $param->taggallahir = $data['tanggal_lahir'];
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
    $param->agama = $data['agama'];
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
}
