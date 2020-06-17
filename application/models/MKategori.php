<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MKategori extends CI_Model
{

  public function get()
  {
    return $this->db->get('kategori')->result();
  }
}
