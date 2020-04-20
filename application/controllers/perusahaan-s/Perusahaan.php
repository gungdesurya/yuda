<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perusahaan extends CI_Controller
{
  public function profil()
  {
    $this->load->view('header');
    $this->load->view('perusahaan/perusahaan/profil');
    $this->load->view('footer');
  }

  public function edit()
  {
    $this->load->view('header');
    $this->load->view('perusahaan/perusahaan/edit');
    $this->load->view('footer');
  }
}
