<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|----------------------------------------------------
| Cart
|----------------------------------------------------
|
| Controller to handle the cart actions
|
| Url = '/cart'
|
*/
class Cart extends CI_Controller {


    /**
     * Listing of the cart content
     */
    public function index()
    {
        $_cart = Cart_helper::get_cart();
        $main['cart'] = $_cart;
        $main['main_content'] = $this->load->view('cart/index', '', true);
        $main['active'] = 'cart';

        /* Load the site template with the page. */
        $data['header'] = $this->load->view('template/header', '', true);
        $data['main'] = $this->load->view('template/main', $main, true);
        $data['footer'] = $this->load->view('template/footer', '', true);
        $this->load->view('template/site', $data);
    }

    public function add($itemid)
    {
        Cart_helper::add_to_cart($itemid);
        redirect(base_url().'item/'.$itemid);
    }







}
