<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MPerusahaan extends CI_Model
{

  public function signup($data)
  {
    // print_r($data);
    $param = new stdClass();
    $param->id_perusahaan = generateRandomString();
    $param->email = $data['email'];
    $param->password = md5($data['password']);
    $param->nama_perusahaan = $data['nama_perusahaan'];
    $param->jenis_perusahaan = $data['jenis_perusahaan'];
    $param->pen_kodepos = $data['pen_kodepos'];
    $param->pen_provinsi = $data['pen_provinsi'];
    $param->pen_kota = $data['pen_kota'];

    return $this->db->insert('perusahaan', $param);
  }

  public function login($data)
  {
    return $this->db->get_where('perusahaan', ['email' => $data['email'], 'password' => $data['password']])->row();
  }

  public function getOne($id)
  {
    return $this->db->where('id_perusahaan', $id)->get('perusahaan')->row();
  }
}

function generateRandomString($length = 32)
{
  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $charactersLength = strlen($characters);
  $randomString = '';
  for ($i = 0; $i < $length; $i++) {
    $randomString .= $characters[rand(0, $charactersLength - 1)];
  }
  return $randomString;
}
