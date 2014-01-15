<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$main['main_content'] = $this->load->view('welcome_message', '', true);
		$foot['footer_content'] = 'Footer content!!';

		$data['header'] = $this->load->view('template/header', '', true);
		$data['main'] = $this->load->view('template/main', $main, true);
		$data['footer'] = $this->load->view('template/footer', $foot, true);

		$this->load->view('template/site', $data);
	}
}
