<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MPendidikanNonFormal extends CI_Model
{

  public function get()
  {
    return $this->db->get('pendidikan_non_formal_list')->result();
  }

  public function getFilter($list)
  {
    $list = json_decode($list);
    $where = '1 = 0';
    foreach ($list as $l) {
      $where .= " OR id = $l";
    }
    return $this->db->where($where)->get('pendidikan_non_formal_list')->result();
  }
}
