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
    $data = $this->input->post();
    $this->MPerusahaan->signup($data);

    $res = $this->db->get_where('perusahaan', ['email' => $data['email']])->row();
    $user['id'] = $res->id;
    $user['email'] = $data['email'];
    $user['nama'] = $data['nama'];
    $user['tipe'] = 'perusahaan';
    $user['isLoggedIn'] = true;
    $this->session->set_userdata($user);
    echo json_encode($res);
  }
}
