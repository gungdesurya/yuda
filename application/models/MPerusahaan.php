<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MPerusahaan extends CI_Model
{

  public function signup($data)
  {
    $param = new stdClass();
    $param->email = $data['email'];
    $param->password = md5($data['password']);
    $param->nama_perusahaan = $data['nama_perusahaan'];
    $param->deskripsi = $data['deskripsi'];
    $param->bidang_perusahaan = $data['bidang_perusahaan'];
    // $param->logo = $data['logo'];
    $param->alamat = $data['alamat'];
    $param->kode_pos = $data['kode_pos'];
    $param->provinsi = $data['provinsi'];
    $param->kabupaten = $data['kabupaten'];
    $param->no_hp = $data['no_hp'];
    $param->nama_kontak = $data['nama_kontak'];
    $param->jabatan_perusahaan = $data['jabatan_perusahaan'];

    return $this->db->insert('perusahaan', $param);
  }

  public function login($data)
  {
    return $this->db->get_where('perusahaan', ['email' => $data['email'], 'password' => $data['password']])->row();
  }
}
