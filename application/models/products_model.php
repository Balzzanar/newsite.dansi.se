<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|----------------------------------------------------
| Porducts Model
|----------------------------------------------------
|
| Model to handle the products that exists on the site.
| Takes care of the crud operations for the products.
|
*/
class Products_model extends CI_Model {


	public function __construct(){

	}

	/**
	 * Collects all the products from the database
	 * and returns them in an array.
	 * 
	 * @return array
	 */
	public function get_all_products(){
		$product = array(
				"id_product"	=> "1"
				,"name"			=> "Test Product"
				,"price"		=> "250"
				,"descript"		=> "Detta är en mycket fin sak!"
				,"img"			=> "pic.jpg"
				,"img_thumb"	=> "pic_thumb.jpg"
			);
		return $product;
	}


	/**
	 * Returns a product given it's id.
	 *
	 * @return array
	 */
	public function get_project_by_id($id_product){

	}
}
