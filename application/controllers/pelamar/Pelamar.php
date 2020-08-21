<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelamar extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('MPelamar');
    $this->load->model('MPendidikanNonFormal');
    $this->load->model('MKategori');
  }

  public function edit()
  {
    $data['isLoggedIn'] = $this->session->userdata('isLoggedIn');
    $data['tipe'] = $this->session->userdata('tipe');
    if (!$data['isLoggedIn']) redirect(base_url() . 'Home', 'refresh');

    $id = $this->session->userdata('id');
    $data['pelamar'] = $this->MPelamar->getOne($id);
    $data['pendidikanNonFormal'] = $this->MPendidikanNonFormal->get();
    $data['kategori'] = $this->MKategori->get();

    $this->load->view('header', $data);
    $this->load->view('pelamar/edit', $data);
    $this->load->view('footer');
  }

  public function submitEdit()
  {
    $data = $this->input->post();

    $id = $this->session->userdata('id');
    $this->MPelamar->edit($data, $id);

    $res = $this->db->get_where('pelamar', ['id' => $id])->row();
    $user['id'] = $res->id;
    $user['email'] = $res->email;
    $user['nama'] = $data['nama'];
    $user['tipe'] = 'pelamar';
    $user['isLoggedIn'] = true;
    $this->session->set_userdata($user);
    echo json_encode($res);
  }
}
