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
    $param->logo = $data['logo'];
    $param->alamat = $data['alamat'];
    $param->kode_pos = $data['kode_pos'];
    $param->provinsi = $data['provinsi'];
    $param->kabupaten = $data['kabupaten'];
    $param->no_hp = $data['no_hp'];
    $param->nama_kontak = $data['nama_kontak'];
    $param->jabatan_perusahaan = $data['jabatan_perusahaan'];
    $param->akta_pendirian_perusahaan = $data['akta_pendirian_perusahaan'];
    $param->siup = $data['siup'];
    $param->tdp = $data['tdp'];
    $param->situ = $data['situ'];
    $param->izin_lainnya = $data['izin_lainnya'];

    return $this->db->insert('perusahaan', $param);
  }

  public function login($data)
  {
    return $this->db->get_where('perusahaan', ['email' => $data['email'], 'password' => $data['password']])->row();
  }

  public function getOne($id)
  {
    return $this->db->where('id', $id)->get('perusahaan')->row();
  }
}
