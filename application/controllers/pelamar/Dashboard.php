<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('MLowongan');
    $this->load->model('MPelamar');
  }

  public function index()
  {
    $data['isLoggedIn'] = $this->session->userdata('isLoggedIn');
    if (!$data['isLoggedIn']) redirect(base_url() . 'Home', 'refresh');

    // get semua lowongan
    $lowongan = $this->MLowongan->getLowongan();
    // get profil
    $pelamar = $this->MPelamar->getOne($this->session->userdata('id'));

    $rangeGaji = [null, "0 - 1000000", "1000000 - 2500000", "2500000 - 5000000", "5000000 - 10000000"];


    // loop lowongan
    foreach ($lowongan as $key => $l) {
      $l->score = 0;
      // (id gaji - id gaji pelamar) ^ 2
      $idGajiPelamar = $this->getGaji($pelamar->rangegaji);
      $idGajiLowongan = array_search($l->range_gaji, $rangeGaji);
      $l->score += pow($idGajiLowongan + $idGajiPelamar, 2);
      // echo "$idGajiPelamar, $idGajiLowongan";

      $keterampilanPelamar = json_decode($pelamar->keterampilan);
      $keterampilanLowongan = json_decode($l->keterampilan);
      // loop keterampilan
      foreach ($keterampilanPelamar as $key => $keterampilan) {
        // (id keterampulan - id keterampilan pelamar) ^ 2
        for ($i = 0; $i < sizeof($keterampilanLowongan); $i++) {
          if ($keterampilanLowongan[$i] == $keterampilan) {
            // echo "$keterampilanLowongan[$i] == $keterampilan<br>";
            $l->score += pow($keterampilanLowongan[$i] + $keterampilan, 2);
            break;
          }
        }
        // (tahun pengalaman kerja - pengalaman kerja pelamar) ^ 2
        $l->score += pow($l->pengalaman_kerja + $pelamar->pengalaman_kerja, 2);

        // square root result
        $l->score = sqrt($l->score);
      }
    }
    // tampung ke hasil araay
    usort($lowongan, function ($a, $b) {
      return strcmp($b->score, $a->score);
    });

    // print_r($lowongan);
    $data['lowongan'] = $lowongan;


    $this->load->view('header', $data);
    $this->load->view('pelamar/dashboard', $data);
    $this->load->view('footer');
  }

  private function getGaji($gaji)
  {
    $rangeGaji = [null, "0 - 1000000", "1000000 - 2500000", "2500000 - 5000000", "5000000 - 10000000"];
    for ($i = 0; $i < sizeof($rangeGaji); $i++) {
      $range = explode(' - ', $rangeGaji[$i]);
      if ($range[0]) {
        if ($gaji > $range[0] and $gaji <= $range[1]) {
          return $i;
        }
      }
    }
    return false;
  }
}
