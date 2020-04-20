<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lowongan extends CI_Controller
{
  public function index()
  {
    $this->load->view('header');
    $this->load->view('lowongan-list');
    $this->load->view('footer');
  }

  public function detail()
  {
    $this->load->view('header');
    $this->load->view('lowongan');
    $this->load->view('footer');
  }
}
