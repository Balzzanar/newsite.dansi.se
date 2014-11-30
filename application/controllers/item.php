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

		public function __construct()
       {
            parent::__construct();
            $this->load->model('products_model');
       }

	/**
	 * Shows all items on the site.
	 *
	 */
	public function listing()
	{
		// $products = $this->products_model->get_dummy_items(6);
		$products = $this->products_model->get_all_products();
		$data['products'] = $products;


        /* The best selling products */
        $data['best_products'] = $this->products_model->get_dummy_items(3);
		$data['show_top_sellers'] = true;
		$data['active_category'] = '';

        $_cart = Cart_helper::get_cart();
        $main['cart'] = $_cart;
		$main['main_content'] = $this->load->view('item/listing', $data, true);
		$main['active'] = 'items';

		/* Load the site template with the page. */
		$data['header'] = $this->load->view('template/header', '', true);
		$data['main'] = $this->load->view('template/main', $main, true);
		$data['footer'] = $this->load->view('template/footer', '', true);
		$this->load->view('template/site', $data);
	}

	/**
	 * Shows all items on the same category.
	 *
	 */
	public function category_listing($category)
	{
        $products = $this->products_model->get_all_products($category);
		$data['products'] = $products;
		$data['show_top_sellers'] = false;
		$data['active_category'] = $category;

        $_cart = Cart_helper::get_cart();
        $main['cart'] = $_cart;
        $main['active_category'] = $category;
        $main['main_content'] = $this->load->view('item/listing', $data, true);
		$main['active'] = 'items';

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
/*        echo '<pre>';
        print_r($product);
        echo '</pre>';die;
*/

        // stdClass Object ( [name] => Test item 1 [price] => 195 [idproduct] => 22 [descript] => Hejsan test test [img] => img src!! [img_thumb] => thumb!! )

        /**
        "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
         */

        $product = $this->products_model->get_product($item_id);
        if ($product === false)
        {
            /* The item dose not exist! */
            redirect('/items');
        }

        $data['product'] = $product;
        $data['show_top_sellers'] = false;
        $data['active_category'] = '1';

        $_cart = Cart_helper::get_cart();
        $main['cart'] = $_cart;
        $main['active_category'] = '1';
        $main['main_content'] = $this->load->view('item/single', $data, true);
        $main['active'] = 'items';

        /* Load the site template with the page. */
        $data['header'] = $this->load->view('template/header', '', true);
        $data['main'] = $this->load->view('template/main', $main, true);
        $data['footer'] = $this->load->view('template/footer', '', true);
        $this->load->view('template/site', $data);
	}
}
