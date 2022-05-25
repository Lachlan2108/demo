<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function index()
	{
		$this->load->view('HomePage');
	}


	public function users()
	{
		$this->load->view('Add_User');
	}

	public function ViewTable()
	{
		$this->load->view('ViewTable');
	}

}
