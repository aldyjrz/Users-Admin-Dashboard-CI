<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends MY_Controller {

	public function welcome(){
		$this->load->view('welcome');
	}

	public function thanks(){
		$this->load->view('thanks');
	}
}
