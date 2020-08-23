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

    $data['perusahaan'] = $this->MPerusahaan->getOne($this->session->userdata('id_perusahaan'));

    $this->load->view('header', $data);
    $this->load->view('perusahaan/perusahaan/edit', $data);
    $this->load->view('footer');
  }

  public function editPerusahaan()
  {
    $data = $this->input->post();

    $id = $this->session->userdata('id_perusahaan');
    echo $id;
    $this->MPerusahaan->edit($data, $id);

    $res = $this->db->get_where('perusahaan', ['id_perusahaan' => $id])->row();
    $user['id_perusahaan'] = $res->id_perusahaan;
    $user['nama'] = $data['nama_perusahaan'];
    $user['tipe'] = 'perusahaan';
    $user['isLoggedIn'] = true;
    $this->session->set_userdata($user);

    redirect('perusahaan-s/Perusahaan/profil');
  }
}
