<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelamar extends CI_Controller
{
  public function edit()
  {
    $data['isLoggedIn'] = $this->session->userdata('isLoggedIn');
    $data['tipe'] = $this->session->userdata('tipe');
    if (!$data['isLoggedIn']) redirect(base_url() . 'Home', 'refresh');

    $this->load->view('header', $data);
    $this->load->view('edit', $data);
    $this->load->view('footer');
  }
}
