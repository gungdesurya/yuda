<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
  public function index()
  {
    $data['isLoggedIn'] = $this->session->userdata('isLoggedIn');

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
