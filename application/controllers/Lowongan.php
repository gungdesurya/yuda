<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lowongan extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('MLowongan');
    $this->load->model('MPerusahaan');
    $this->load->model('MPendidikanNonFormal');
    $this->load->model('MKategori');
  }

  public function index()
  {
    $data['isLoggedIn'] = $this->session->userdata('isLoggedIn');

    $data['param'] = new stdClass();
    $nama = $data['param']->nama = $this->input->get('nama');
    $kategori = $data['param']->kategori = $this->input->get('kategori');
    $data['lowongan'] = $this->MLowongan->getLowongan($nama, $kategori);
    $data['kategori'] = $this->MKategori->get();

    $this->load->view('header', $data);
    $this->load->view('lowongan-list', $data);
    $this->load->view('footer');
  }

  public function detail($id)
  {
    $data['isLoggedIn'] = $this->session->userdata('isLoggedIn');
    $data['lowongan'] = $this->MLowongan->getOne($id);
    $data['perusahaan'] = $this->MPerusahaan->getOne($data['lowongan']->id_perusahaan);
    $data['pendidikanNonFormal'] = $this->MPendidikanNonFormal->getFilter($data['lowongan']->keterampilan);

    $this->load->view('header', $data);
    $this->load->view('lowongan', $data);
    $this->load->view('footer');
  }
}
