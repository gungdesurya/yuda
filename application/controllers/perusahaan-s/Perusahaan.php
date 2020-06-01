<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perusahaan extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('MLowongan');
  }

  public function profil()
  {
    $data['isLoggedIn'] = $this->session->userdata('isLoggedIn');
    if (!$data['isLoggedIn']) redirect(base_url() . 'Home', 'refresh');

    $data['lowongan'] = $this->MLowongan->getLowonganPerusahaan($this->session->userdata('id'));

    $this->load->view('header', $data);
    $this->load->view('perusahaan/perusahaan/profil', $data);
    $this->load->view('footer');
  }

  public function edit()
  {
    $data['isLoggedIn'] = $this->session->userdata('isLoggedIn');
    if (!$data['isLoggedIn']) redirect(base_url() . 'Home', 'refresh');

    $this->load->view('header', $data);
    $this->load->view('perusahaan/perusahaan/edit', $data);
    $this->load->view('footer');
  }
}
