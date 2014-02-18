<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Newproducts extends CI_Controller {

	
	public function index()
	{
		$main['main_content'] = $this->load->view('newproducts/index', '', true);

		$data['header'] = $this->load->view('template/header', '', true);
		$data['main'] = $this->load->view('template/main', $main, true);
		$data['footer'] = $this->load->view('template/footer', '', true);

		$this->load->view('template/site', $data);
	}
}
