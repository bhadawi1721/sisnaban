<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data['header']='template/view_header';
		$data['sidebar']='template/view_sidebar';
		// $data['content']='content'; // tes content
		// $data['footer']='footer';
		$this->load->view('template/view_index', $data);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */