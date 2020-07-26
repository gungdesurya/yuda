<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftar extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('MPendidikanNonFormal');
    $this->load->model('MPelamar');
    $this->load->model('MPerusahaan');
  }

  public function pelamar()
  {
    $data['pendidikanNonFormal'] = $this->MPendidikanNonFormal->get();
    $data['isLoggedIn'] = $this->session->userdata('isLoggedIn');

    $this->load->view('header', $data);
    $this->load->view('register-pelamar', $data);
    $this->load->view('footer');
  }

  public function submitPelamar()
  {
    $config['upload_path'] = "./uploads/users";
    $config['allowed_types'] = 'gif|jpg|png';
    $config['encrypt_name'] = TRUE;

    $this->load->library('upload');
    $this->upload->initialize($config);

    $data = $this->input->post();
    if ($this->upload->do_upload('foto')) {
      $upload = $this->upload->data();
      $data['foto'] = $upload['file_name'];
    } else return false;

    $data['berkas'] = [];
    for ($i = 0; $i < 4; $i++) {
      if (!empty($_FILES['berkas']['name'][$i])) {

        // Define new $_FILES array - $_FILES['file']
        $_FILES['file']['name'] = $_FILES['berkas']['name'][$i];
        $_FILES['file']['type'] = $_FILES['berkas']['type'][$i];
        $_FILES['file']['tmp_name'] = $_FILES['berkas']['tmp_name'][$i];
        $_FILES['file']['error'] = $_FILES['berkas']['error'][$i];
        $_FILES['file']['size'] = $_FILES['berkas']['size'][$i];

        if ($this->upload->do_upload('file')) {
          $upload = $this->upload->data();
          array_push($data['berkas'], $upload['file_name']);
        } else return false;
      }
    }

    $this->MPelamar->signup($data);

    $res = $this->db->get_where('pelamar', ['email' => $data['email']])->row();
    $user['id'] = $res->id;
    $user['email'] = $data['email'];
    $user['nama'] = $data['nama'];
    $user['tipe'] = 'pelamar';
    $user['isLoggedIn'] = true;
    $this->session->set_userdata($user);
    echo json_encode($res);
  }

  public function perusahaan()
  {
    $data['isLoggedIn'] = $this->session->userdata('isLoggedIn');

    $this->load->view('header', $data);
    $this->load->view('register-perusahaan', $data);
    $this->load->view('footer');
  }

  public function submitPerusahaan()
  {
    $data = $this->input->post();

    $this->MPerusahaan->signup($data);

    $res = $this->db->get_where('perusahaan', ['email' => $data['email']])->row();
    $user['id_perusahaan'] = $res->id_perusahaan;
    $user['email'] = $data['email'];
    $user['nama'] = $data['nama_perusahaan'];
    $user['tipe'] = 'perusahaan';
    $user['isLoggedIn'] = true;
    $this->session->set_userdata($user);

    redirect('perusahaan-s/Perusahaan/profil');
  }
}
