<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perusahaan extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('MPerusahaan');
    $this->load->model('MLowongan');
  }

  public function detail($id)
  {
    $data['isLoggedIn'] = $this->session->userdata('isLoggedIn');
    $data['tipe'] = $this->session->userdata('tipe');

    $data['perusahaan'] = $this->MPerusahaan->getOne($id);
    $data['lowongan'] = $this->MLowongan->getLowonganPerusahaan($id);

    $this->load->view('header', $data);
    $this->load->view('perusahaan', $data);
    $this->load->view('footer');
  }
}
