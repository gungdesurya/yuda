<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perusahaan extends CI_Controller
{
  public function profil()
  {
    $data['isLoggedIn'] = $this->session->userdata('isLoggedIn');
    if (!$data['isLoggedIn']) redirect(base_url() . 'Home', 'refresh');

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
