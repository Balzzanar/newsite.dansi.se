<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|----------------------------------------------------
| New products
|----------------------------------------------------
|
| Controller to handle the new products page, where 
| products are added to the site. 
|
| Url = '/newproducts'
|
*/
class Newproducts extends CI_Controller {

	public function index()
	{	
		

		$main['main_content'] = $this->load->view('newproducts/index', '', true);

		$data['header'] = $this->load->view('template/header', '', true);
		$data['main'] = $this->load->view('template/main', $main, true);
		$data['footer'] = $this->load->view('template/footer', '', true);

		$this->load->view('template/site', $data);
	}


	public function newproduct()
	{

		$this->load->model('products_model');
		
		$this->products_model->uploadImg();
		die("done");

		if (count($_POST > 0))
		{
			$is_new_data = false;
			$product = array();

			if (isset($_POST['p_name']) && $_POST['p_name'] != '')
			{
				$product['name'] = $_POST['p_name'];
				$is_new_data = true;
			} 

			if (isset($_POST['p_price']) && $_POST['p_price'] != '')
			{
				$product['price'] = $_POST['p_price'];
				$is_new_data = true;
			} 

			if (isset($_POST['p_description']) && $_POST['p_description'] != '')
			{
				$product['description'] = $_POST['p_description'];
				$is_new_data = true;
			} 

			if (isset($_POST['userfile']) && $_POST['userfile'] != '')
			{
				$product['filename'] = $_POST['userfile'];
				$is_new_data = true;
				echo 'lol';
				$product['uploaded_file'] = $this->products_model->uploadImg();
			} 

			if (! $is_new_data) 
			{
				redirect('/newproducts');		
			}
			else 
			{
				var_dump($product);
			}
		} 
		else 
		{
			redirect('/newproducts');
		}
		
	}
}
