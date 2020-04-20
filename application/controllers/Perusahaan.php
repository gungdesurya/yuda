<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perusahaan extends CI_Controller
{
  public function detail()
  {
    $this->load->view('header');
    $this->load->view('perusahaan');
    $this->load->view('footer');
  }
}
