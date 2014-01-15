<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Newproducts extends CI_Controller {

	
	public function index()
	{
		$this->load->view('newproducts/index');
	}
}
