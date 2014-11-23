<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart_helper
{

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
        array_push($_SESSION[Cart_helper::_get_cart_name()]->items, $itemid);
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
}