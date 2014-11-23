<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart_helper
{

    private $CI;
    /**
     * Returns the cart that was created for the user.
     * If none is created, set up a new one.
     *
     * @return mixed
     */
    public function get_cart()
    {
        if (isset($_SESSION) && isset($_SESSION[Cart_helper::_get_cart_name()]))
        {
            return $_SESSION[Cart_helper::_get_cart_name()];
        }
        else
        {
            Cart_helper::_init_cart();
            return $_SESSION[Cart_helper::_get_cart_name()];
        }
    }


    /**
     * Add item to the cart!
     *
     * @param $itemid
     */
    public function add_to_cart($itemid)
    {
        $this->CI =& get_instance();
        $this->CI->load->model('products_model');
        $item = reset($this->CI->products_model->get_dummy_items(1));
        $item->idproduct = $itemid;
        $item->num = 1;

        $items = $_SESSION[Cart_helper::_get_cart_name()]->items;
        if (isset($items[$itemid]))
        {
            $num = $items[$itemid]->num +1;
            $items[$itemid]->num = $num;
        }
        else
        {
            $items[$itemid] = $item;
        }
        $_SESSION[Cart_helper::_get_cart_name()]->items = $items;
        Cart_helper::_update_total();
    }

    public function cart_destroy()
    {
        unset($_SESSION[Cart_helper::_get_cart_name()]);
    }

    public function remove($itemid)
    {
        $items = $_SESSION[Cart_helper::_get_cart_name()]->items;
        unset($items[$itemid]);
        $_SESSION[Cart_helper::_get_cart_name()]->items = $items;
        Cart_helper::_update_total();
    }

    /** ------------ Private functions ------------ */

    private function _get_cart_name()
    {
        $_cart_name = $_SERVER['REMOTE_ADDR'];
        $_cart_name .= $_SERVER['HTTP_USER_AGENT'];
        $_cart_name .= $_SERVER['HTTP_COOKIE'];
        $_cart_name = 'Cart-'.md5($_cart_name);
        return $_cart_name;
    }

    private function _init_cart()
    {
        $_cart = new stdClass();
        $_cart->total = 0;
        $_cart->items = array();
        $_SESSION[Cart_helper::_get_cart_name()] = $_cart;
    }

    private function _update_total()
    {
        $_cart = Cart_helper::get_cart();
        $items = $_cart->items;
        $_tot = 0;
        foreach($items as $item)
        {

            $_tot = $_tot + ($item->price * $item->num);
        }
        $_cart->total = $_tot;
        $_SESSION[Cart_helper::_get_cart_name()] = $_cart;
    }
}