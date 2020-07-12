<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clients extends CI_Controller {
  public function __construct(){
		parent::__construct();

    $this->load->model("clients_model");
	}

	public function index()
	{
    $data['clients'] = $this->clients_model->fetch_clients();

		$this->load->view('clients/clients', $data);
	}

  public function register()
	{
    $data['clients'] = $this->clients_model->fetch_clients();
		$this->load->view('clients/register', $data);
	}

  public function detail($id)
	{
    $data['client'] = $this->clients_model->fetch_client($id);
		$this->load->view('clients/detail', $data);
	}

  public function update_client(){
    $posts = $this->input->post();
    $data['info'] = $this->clients_model->update_client($posts);
    redirect(base_url().'clients');
  }

  public function insert_client(){
    $posts = $this->input->post();
    $data['info'] = $this->clients_model->insert_client($posts);
    redirect(base_url().'clients');
  }

  public function delete_client(){
    $data['info'] = $this->clients_model->delete_client($this->input->post('id'));
    redirect(base_url().'clients');
  }
}
