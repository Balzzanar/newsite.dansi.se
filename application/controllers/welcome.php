<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|----------------------------------------------------
| Welcome
|----------------------------------------------------
|
| Controller to handle the welcome page. 
| This is the first controller to run, on site load. 
|
| Url = '/'
|
*/
class Welcome extends CI_Controller {


	public function index()
	{
		$main['main_content'] = $this->load->view('welcome/index', '', true);

		$data['header'] = $this->load->view('template/header', '', true);
		$data['main'] = $this->load->view('template/main', $main, true);
		$data['footer'] = $this->load->view('template/footer', '', true);

		$this->load->view('template/site', $data);
	}
}
