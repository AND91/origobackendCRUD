<?php
class Clients_model extends CI_Model {

  public $table = 'clientes';

  public function __construct(){
      parent::__construct();
  }

  public function fetch_clients(){
    $this->db->select('id, nome, email, telefone, estado, cidade, nascimento');
    $this->db->from($this->table);
    $query = $this->db->get();
    return $query->result();
  }

  public function fetch_client($id){
    $this->db->select('id, nome, email, telefone, estado, cidade, nascimento');
    $this->db->from($this->table);
    $this->db->where('id', $id);
    $query = $this->db->get();
    return $query->row();
  }

  public function update_client($info){
    $this->db->set('nome', $info['nome']);
    $this->db->set('email', $info['email']);
    $this->db->set('telefone', $info['telefone']);
    $this->db->set('estado', $info['estado']);
    $this->db->set('cidade', $info['cidade']);
    $this->db->set('nascimento', $info['nascimento']);
		$this->db->where('id', $info['id']);
		$this->db->update('clientes');

    return true;
  }

  public function insert_client($info){
    $data = [
      'nome' => $info['nome'],
      'email' => $info['email'],
      'telefone' => $info['telefone'],
      'estado' => $info['estado'],
      'cidade' => $info['cidade'],
      'nascimento' => $info['nascimento'],
    ];

		$this->db->insert('clientes', $data);
		return $this->db->insert_id();
  }

  public function fetch_have_impediment($id){
    $this->db->select('c.id');
    $this->db->from('clientes as c');
    $this->db->join('planos_clientes as p', 'c.id = p.id_cliente');
    $this->db->where('p.id_plano', 1);
    $this->db->where('c.estado', 'São Paulo');
    $this->db->where('c.id', $id);
    $query = $this->db->get();
    return $query->row();
  }

  public function delete_client($id){
    $this->db->where('id', $id);
    $this->db->delete($this->table);
    return true;
  }

}
