<?php
class Plans_model extends CI_Model {

  public $table = 'planos';

  public function __construct(){
      parent::__construct();
  }

  public function fetch_plans(){
    $this->db->select('plano, mensalidade');
    $this->db->from($this->table);
    $query = $this->db->get();
    return $query->result();
  }

}
