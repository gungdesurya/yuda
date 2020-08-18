<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('MKategori');
  }

  public function index()
  {
    $data['isLoggedIn'] = $this->session->userdata('isLoggedIn');
    $data['tipe'] = $this->session->userdata('tipe');

    $data['kategori'] = $this->MKategori->get();

    $this->load->view('header', $data);
    $this->load->view('home', $data);
    $this->load->view('footer');
  }

  public function logout()
  {
    $this->session->sess_destroy();
    redirect('Home', 'refresh');
  }
}
