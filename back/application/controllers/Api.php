<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

  public function __construct(){
		parent::__construct();

    $this->load->model("clients_model");
    $this->load->model("plans_model");

	}

  public function index()
	{
		$this->load->view('documentation');
	}

  public function fetch_clients(){
    $clients = $this->clients_model->fetch_clients();
    echo json_encode($clients);
  }

  public function fetch_client(){
    $id = $_GET['id'];
    $client = $this->clients_model->fetch_client($id);
    echo json_encode($client);
  }

  public function update_client(){
    $info = $this->input->get();
    $client = $this->clients_model->update_client($info);
    echo $client;
  }

  public function insert_client(){
    $info = $this->input->get();
    $client = $this->clients_model->insert_client($info);
    echo $client;
  }

  public function delete_client(){
    $id = $_GET['id'];
    $have_impediment = $this->clients_model->fetch_have_impediment($id);
    var_dump($have_impediment);
    if($have_impediment == null){
      $client = $this->clients_model->delete_client($id);
      echo $client;
    }else{
      echo "Cliente não pode ser excluido";
    }
  }

  public function fetch_plans(){
    $plans = $this->plans_model->fetch_plans();
    echo json_encode($plans);
  }

}
