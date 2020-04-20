	<?php
	defined('BASEPATH') or exit('No direct script access allowed');

	class dashboard extends CI_Controller
	{

	 
		public function __construct()
		{
			parent::__construct();
			$this->load->model('user_model');
		}

		//add comment
		public function index()
		{
			$data['page_title'] = 'BSH Dashboard';

			$data['members'] = $this->user_model->semua();
			$data['admin'] = $this->user_model->showadmin();

			view('base_template', 'admin_dashboard', $data);
		}


		
	
}
