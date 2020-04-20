<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
  public function pelamar()
  {
    $this->load->view('header');
    $this->load->view('login-pelamar');
    $this->load->view('footer');
  }

  public function perusahaan()
  {
    $this->load->view('header');
    $this->load->view('login-perusahaan');
    $this->load->view('footer');
  }
}
