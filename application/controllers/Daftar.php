<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftar extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('MPendidikanNonFormal');
    $this->load->model('MPelamar');
    $this->load->model('MPerusahaan');
  }

  public function pelamar()
  {
    $data['pendidikanNonFormal'] = $this->MPendidikanNonFormal->get();
    $data['isLoggedIn'] = $this->session->userdata('isLoggedIn');

    $this->load->view('header', $data);
    $this->load->view('register-pelamar', $data);
    $this->load->view('footer');
  }

  public function submitPelamar()
  {
    $data = $this->input->post();
    $this->MPelamar->signup($data);

    $res = $this->db->get_where('pelamar', ['email' => $data['email']])->row();
    $user['id'] = $res->id;
    $user['email'] = $data['email'];
    $user['nama'] = $data['nama'];
    $user['tipe'] = 'pelamar';
    $user['isLoggedIn'] = true;
    $this->session->set_userdata($user);
    echo json_encode($res);
  }

  public function perusahaan()
  {
    $data['isLoggedIn'] = $this->session->userdata('isLoggedIn');

    $this->load->view('header', $data);
    $this->load->view('register-perusahaan', $data);
    $this->load->view('footer');
  }

  public function submitPerusahaan()
  {
    $config['upload_path'] = "./uploads/logo";
    $config['allowed_types'] = 'gif|jpg|png';
    $config['encrypt_name'] = TRUE;

    $this->load->library('upload');
    $this->upload->initialize($config);

    $data = $this->input->post();
    if ($this->upload->do_upload('logo')) {
      $upload = $this->upload->data();
      $data['logo'] = $upload['file_name'];
    } else return false;

    $config['upload_path'] = "./uploads/file_perusahaan";
    $this->upload->initialize($config);
    if ($this->upload->do_upload('akta_pendirian_perusahaan')) {
      $upload = $this->upload->data();
      $data['akta_pendirian_perusahaan'] = $upload['file_name'];
    } else return false;

    if ($this->upload->do_upload('siup')) {
      $upload = $this->upload->data();
      $data['siup'] = $upload['file_name'];
    } else return false;

    if ($this->upload->do_upload('tdp')) {
      $upload = $this->upload->data();
      $data['tdp'] = $upload['file_name'];
    } else return false;

    if ($this->upload->do_upload('situ')) {
      $upload = $this->upload->data();
      $data['situ'] = $upload['file_name'];
    } else return false;

    if ($this->upload->do_upload('izin_lainnya')) {
      $upload = $this->upload->data();
      $data['izin_lainnya'] = $upload['file_name'];
    } else return false;

    $this->MPerusahaan->signup($data);

    $res = $this->db->get_where('perusahaan', ['email' => $data['email']])->row();
    $user['id'] = $res->id;
    $user['email'] = $data['email'];
    $user['nama'] = $data['nama_perusahaan'];
    $user['tipe'] = 'perusahaan';
    $user['isLoggedIn'] = true;
    $this->session->set_userdata($user);
    echo json_encode($res);
  }
}
