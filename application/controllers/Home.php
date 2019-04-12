<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
			
		$this->load->view('files/header.php');
		$this->load->view('files/footer.php');
	}

}
