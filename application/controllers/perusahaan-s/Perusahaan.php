<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perusahaan extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('MLowongan');
    $this->load->model('MPerusahaan');
  }

  public function profil()
  {
    $data['isLoggedIn'] = $this->session->userdata('isLoggedIn');
    $data['tipe'] = $this->session->userdata('tipe');
    if (!$data['isLoggedIn']) redirect(base_url() . 'Home', 'refresh');

    // echo $this->session->userdata('id_perusahaan');
    $data['lowongan'] = $this->MLowongan->getLowonganPerusahaan($this->session->userdata('id_perusahaan'));
    $data['perusahaan'] = $this->MPerusahaan->getOne($this->session->userdata('id_perusahaan'));

    // print_r($data['lowongan']);

    $this->load->view('header', $data);
    $this->load->view('perusahaan/perusahaan/profil', $data);
    $this->load->view('footer');
  }

  public function edit()
  {
    $data['isLoggedIn'] = $this->session->userdata('isLoggedIn');
    $data['tipe'] = $this->session->userdata('tipe');
    if (!$data['isLoggedIn']) redirect(base_url() . 'Home', 'refresh');

    $this->load->view('header', $data);
    $this->load->view('perusahaan/perusahaan/edit', $data);
    $this->load->view('footer');
  }
}
