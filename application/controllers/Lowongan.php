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
    $data['tipe'] = $this->session->userdata('tipe');

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
    $data['tipe'] = $this->session->userdata('tipe');
    $data['lowongan'] = $this->MLowongan->getOne($id);
    $data['perusahaan'] = $this->MPerusahaan->getOne($data['lowongan']->id_perusahaan);
    // $data['pendidikanNonFormal'] = $this->MPendidikanNonFormal->getFilter($data['lowongan']->keterampilan);

    $this->load->view('header', $data);
    $this->load->view('lowongan', $data);
    $this->load->view('footer');
  }

  public function generateKeterampilan()
  {
    for ($i = 22; $i < 5060; $i++) {
      $length = rand(1, 10);
      $keterampilan = [];
      for ($j = 0; $j < $length; $j++) {
        array_push($keterampilan, rand(1, 10));
      }
      // print_r(json_encode($keterampilan));

      $param = new stdClass();
      $param->keterampilan = json_encode($keterampilan);
      $this->db->where('id', $i);
      $this->db->update('lowongan', $param);
    }
  }

  public function generate_pengalaman_kerja()
  {
    for ($i = 22; $i < 5060; $i++) {
      $param = new stdClass();
      $param->pengalaman_kerja = rand(1, 5);
      $this->db->where('id', $i);
      $this->db->update('lowongan', $param);
    }
  }
}
