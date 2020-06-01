<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lowongan extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('MPendidikanNonFormal');
  }

  public function create()
  {
    $data['isLoggedIn'] = $this->session->userdata('isLoggedIn');
    if (!$data['isLoggedIn']) redirect(base_url() . 'Home', 'refresh');
    $data['pendidikanNonFormal'] = $this->MPendidikanNonFormal->get();

    $this->load->view('header', $data);
    $this->load->view('perusahaan/lowongan/create', $data);
    $this->load->view('footer');
  }

  public function edit()
  {
    $data['isLoggedIn'] = $this->session->userdata('isLoggedIn');
    if (!$data['isLoggedIn']) redirect(base_url() . 'Home', 'refresh');

    $this->load->view('header', $data);
    $this->load->view('perusahaan/lowongan/edit', $data);
    $this->load->view('footer');
  }
}
