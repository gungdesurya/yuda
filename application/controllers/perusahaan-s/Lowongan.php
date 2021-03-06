<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lowongan extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('MPendidikanNonFormal');
    $this->load->model('MKategori');
    $this->load->model('MLowongan');
  }

  public function create()
  {
    $data['isLoggedIn'] = $this->session->userdata('isLoggedIn');
    $data['tipe'] = $this->session->userdata('tipe');
    if (!$data['isLoggedIn']) redirect(base_url() . 'Home', 'refresh');
    $data['pendidikanNonFormal'] = $this->MPendidikanNonFormal->get();
    $data['kategori'] = $this->MKategori->get();

    $this->load->view('header', $data);
    $this->load->view('perusahaan/lowongan/create', $data);
    $this->load->view('footer');
  }

  public function submitCreate()
  {
    $data['isLoggedIn'] = $this->session->userdata('isLoggedIn');
    if (!$data['isLoggedIn']) redirect(base_url() . 'Home', 'refresh');

    $data = $this->input->post();
    $data['id_perusahaan'] = $this->session->userdata('id_perusahaan');
    $this->MLowongan->create($data);

    redirect('perusahaan-s/perusahaan/profil', 'refresh');
  }

  public function edit($id)
  {
    $data['isLoggedIn'] = $this->session->userdata('isLoggedIn');
    $data['tipe'] = $this->session->userdata('tipe');
    if (!$data['isLoggedIn']) redirect(base_url() . 'Home', 'refresh');

    $data['pendidikanNonFormal'] = $this->MPendidikanNonFormal->get();
    $data['kategori'] = $this->MKategori->get();
    $data['lowongan'] = $this->MLowongan->getOne($id);
    // $data['currPNF'] = json_decode($data['lowongan']->keterampilan);

    $this->load->view('header', $data);
    $this->load->view('perusahaan/lowongan/edit', $data);
    $this->load->view('footer');
  }

  public function submitEdit($id)
  {
    $data['isLoggedIn'] = $this->session->userdata('isLoggedIn');
    if (!$data['isLoggedIn']) redirect(base_url() . 'Home', 'refresh');

    $data = $this->input->post();
    $this->MLowongan->edit($data, $id);

    redirect('perusahaan-s/perusahaan/profil', 'refresh');
  }

  public function delete($id)
  {
    $data['isLoggedIn'] = $this->session->userdata('isLoggedIn');
    if (!$data['isLoggedIn']) redirect(base_url() . 'Home', 'refresh');

    $this->MLowongan->delete($id);

    redirect('perusahaan-s/perusahaan/profil', 'refresh');
  }
}
