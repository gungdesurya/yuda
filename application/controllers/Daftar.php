<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftar extends CI_Controller
{
  public function pelamar()
  {
    $this->load->view('header');
    $this->load->view('register-pelamar');
    $this->load->view('footer');
  }

  public function perusahaan()
  {
    $this->load->view('header');
    $this->load->view('register-perusahaan');
    $this->load->view('footer');
  }
}
