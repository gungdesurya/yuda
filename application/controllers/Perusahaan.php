<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perusahaan extends CI_Controller
{
  public function detail()
  {
    $data['isLoggedIn'] = $this->session->userdata('isLoggedIn');

    $this->load->view('header', $data);
    $this->load->view('perusahaan', $data);
    $this->load->view('footer');
  }
}
