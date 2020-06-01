<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MPendidikanNonFormal extends CI_Model
{

  public function get()
  {
    return $this->db->get('pendidikan_non_formal_list')->result();
  }
}
