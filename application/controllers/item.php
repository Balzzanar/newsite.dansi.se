<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|----------------------------------------------------
| Item
|----------------------------------------------------
|
| Controller to handle the items page. 
| 
|
| Url = '/items'
| Url = '/item/(:num)'
|
*/
class Item extends CI_Controller {

	/**
	 * Shows all items on the site.
	 *
	 */
	public function listing()
	{
		$main['main_content'] = $this->load->view('gallery/index', '', true);
		$main['active'] = 'gallery';	

		/* Load the site template with the page. */
		$data['header'] = $this->load->view('template/header', '', true);
		$data['main'] = $this->load->view('template/main', $main, true);
		$data['footer'] = $this->load->view('template/footer', '', true);
		$this->load->view('template/site', $data);
	}

	/**
	 * Shows the item with the corresponding id.
	 *
	 */
	public function show_item($item_id)
	{
		die("Show item page");
	}
}
