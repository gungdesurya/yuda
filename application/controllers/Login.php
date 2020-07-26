<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('MPelamar');
    $this->load->model('MPerusahaan');
  }

  public function pelamar()
  {
    $data['isLoggedIn'] = $this->session->userdata('isLoggedIn');

    $this->load->view('header', $data);
    $this->load->view('login-pelamar', $data);
    $this->load->view('footer');
  }

  public function submitPelamar()
  {
    $data = $this->input->post();
    $data['password'] = md5($data['password']);
    $user = $this->MPelamar->login($data);
    print_r($user);
    if ($user) {
      $login['id'] = $user->id;
      $login['email'] = $user->email;
      $login['nama'] = $user->nama;
      $login['tipe'] = 'pelamar';
      $login['isLoggedIn'] = true;
      $this->session->set_userdata($login);

      redirect('pelamar/Dashboard', 'refresh');
    } else {
      redirect('login/pelamar', 'refresh');
    }
  }

  public function perusahaan()
  {
    $data['isLoggedIn'] = $this->session->userdata('isLoggedIn');

    $this->load->view('header', $data);
    $this->load->view('login-perusahaan', $data);
    $this->load->view('footer');
  }

  public function submitPerusahaan()
  {
    $data = $this->input->post();
    $data['password'] = md5($data['password']);
    $user = $this->MPerusahaan->login($data);
    if ($user) {
      $login['id_perusahaan'] = $user->id_perusahaan;
      $login['email'] = $user->email;
      $login['nama'] = $user->nama_perusahaan;
      $login['tipe'] = 'perusahaan';
      $login['isLoggedIn'] = true;
      $this->session->set_userdata($login);


      redirect('perusahaan-s/perusahaan/profil', 'refresh');
    } else {
      redirect('login/pelamar', 'refresh');
    }
  }
}
