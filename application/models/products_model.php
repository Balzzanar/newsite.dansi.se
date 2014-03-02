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
class Products_model extends CI_Model 
{



	/**
	 * Collects all the products from the database
	 * and returns them in an array.
	 * 
	 * @return array
	 */
	public function get_all_products()
	{
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
	public function get_project_by_id($id_product)
	{

	}


	public function uploadImg()
	{
		$config = array (
				'allowed_types' => 'jpg|jpeg|png',
				'upload_path' => realpath(APPPATH.'../public')
			);
		$this->load->library('upload', $config);


		if ( ! $this->upload->do_upload())
        {
            echo("{errors: {id:'name', msg:'" . $this->upload->display_errors() . "'}}");
        return;
        }    
        else
        {
            $errUpload = "";
            $uploadData = $this->upload->data();
            $path = $uploadData['file_name'];
    }

		echo 'adfgdsf';
	}

}
