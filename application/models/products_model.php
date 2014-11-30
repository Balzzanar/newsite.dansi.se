<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|----------------------------------------------------
| Porducts Model
|----------------------------------------------------
|
| Model to handle the products that exists on the site.
| Takes care of the crud operations for the products.
|
| Product categorys:
| 	1 == 'Örhänge'
| 	2 == 'Halsband'
| 	3 == 'Armband'
| 	4 == ''
|
*/
class Products_model extends CI_Model 
{
    /**
     * Collects all the products from the database
     * and returns them in an array.
     * If the category options is set, then only the once from
     * that given category will be returned.
     *
     * @param $category
     * @return array
     */
	public function get_all_products($category = -1)
	{
		$sql = "CALL dansi_products_get(?)";
        $params = array(
            $category
        );
		$query = $this->db->query($sql, $params);
        $products = array();
        if (isset($query->num_rows))
        {
            $results = $query->result();
            foreach($results as $result)
            {
                $product = $result;
                $product->img = base_url().'public/images/'.$product->img;
                $product->img_thumb = base_url().'public/images/'.$product->img_thumb;
                $products[] = $product;
            }
        }
		return $products;
	}

	/**
	 * Uploads the file selected in the 'newproduct form'.
	 * Generates a new name, and stores it on the server, 
	 * in a public folder.
	 */
	public function uploadImg()
	{
		$config = array (
                                'allowed_types' => 'jpg|jpeg|png',
                                'upload_path' => dirname($_SERVER["SCRIPT_FILENAME"]).'/application/public/upload',
                                'file_name' => time()
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
            return $path;
    	}
	}

	/**
	 * Stores the new product to the database!
	 */
	public function store_new_product($product)
	{
		echo 'Will store this product to the database: '."<br /><br />";
		var_dump($product);
		$sql = "CALL dansi_product_new(?,?,?,?,?)";
		$params = array(
			$product['name'],
			$product['price'],
			$product['descript'],
			$product['uploaded_file'],
            "thumb_".$product['uploaded_file']
		);
        $query = $this->db->query($sql, $params);
	}

    public function get_product($id_product)
    {
        $sql = "CALL dansi_product_get(?)";
        $params = array(
            $id_product
        );
        $query = $this->db->query($sql, $params);
        if (isset($query->num_rows) && $query->num_rows > 0)
        {
            $product = reset($query->result());
            $product->img = base_url().'public/images/'.$product->img;
            $product->img_thumb = base_url().'public/images/'.$product->img_thumb;
            return $product;
        }
        return false;
    }

	/**
	* Dummy data!
	* 
	*/
	public function get_dummy_items($num)
	{
		$arr = array();	
		for ($i = 0; $i < $num; $i++)
		{
			$res = new stdClass();
			$res->name = 'Test item 1';
			$res->price = '195';
			$res->idproduct = '22';
			$res->descript = 'Hejsan test test';
			$res->img = 'img src!!';
			$res->img_thumb = 'thumb!!';
			$arr[] = $res;			
		}
		
		return $arr;
	}

    /**
     * Mark the product for deletion
     *
     * @param $idproduct
     */
    public function delete_product($idproduct)
    {
        $sql = "CALL dansi_product_del(?)";
        $params = array(
            $idproduct
        );
        $query = $this->db->query($sql, $params);
    }

}
