<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plans extends CI_Controller {
  public function __construct(){
		parent::__construct();

    $this->load->model("plans_model");
	}

	public function index()
	{
    $data['plans'] = $this->plans_model->fetch_plans();

		$this->load->view('plans/plans', $data);
	}
}
