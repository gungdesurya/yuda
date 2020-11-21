<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('MLowongan');
    $this->load->model('MPelamar');
    $this->load->model('MKategori');
  }

  public function index()
  {
    $data['isLoggedIn'] = $this->session->userdata('isLoggedIn');
    $data['tipe'] = $this->session->userdata('tipe');
    if (!$data['isLoggedIn']) redirect(base_url() . 'Home', 'refresh');

    // get profil
    $pelamar = $this->MPelamar->getOne($this->session->userdata('id'));
    $pendidikanMinPelamar = $this->getPendidikanMinPelamar($pelamar->tahun);
    // get semua lowongan

    // find pelamar age
    $birthDate = $pelamar->taggallahir;
    $birthDate = explode("-", $birthDate);
    $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
      ? ((date("Y") - $birthDate[0]) - 1)
      : (date("Y") - $birthDate[0]));

    $lowongan = $this->MLowongan->getLowongan('', $pelamar->jk, $pendidikanMinPelamar, $age);

    $rangeGaji = [null, "0 - 1000000", "1000000 - 2500000", "2500000 - 5000000", "5000000 - 10000000"];


    // loop lowongan
    foreach ($lowongan as $key => $l) {
      $l->score = 0;
      // (id gaji - id gaji pelamar) ^ 2
      $idGajiPelamar = $this->getGaji($pelamar->rangegaji);
      $idGajiLowongan = array_search("$l->range_gaji_dari - $l->range_gaji_sampai", $rangeGaji);
      $l->score += pow($idGajiLowongan + $idGajiPelamar, 2);
      // echo "$idGajiPelamar, $idGajiLowongan";

      $keterampilanPelamar = $pelamar->keterampilan;
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
      return strcmp($a->score, $b->score);
    });
    // foreach ($lowongan as $key => $l) {
    //   echo "$l->score, ";
    // }
    
    $data['lowongan'] = $lowongan;

    $data['kategori'] = $this->MKategori->get();

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

  private function getPendidikanMinPelamar($tahun)
  {
    if ($tahun[3] != "") return "S1";
    else if ($tahun[2] != "") return "SMA/SMK";
    else if ($tahun[1] != "") return "SMP";
    else if ($tahun[0] != "") return "SD";
    else return 0;
  }
}
