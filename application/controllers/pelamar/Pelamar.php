<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelamar extends CI_Controller
{
  public function edit()
  {
    $this->load->view('header');
    $this->load->view('edit');
    $this->load->view('footer');
  }
}
