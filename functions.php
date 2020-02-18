<?php
/**
 * The functions
 * 
 * @package SJM
 * @author
 */

// Include the main functions
require_once 'main.php';

$cart_items = [];

/**
 * Lets get the cart items from cookie if ever the session expires
 * This will keep the cart items when the user leaves and come back soon
 */
if( ! user_is_loggedin() && ! empty( $_COOKIE['cart-items'] ) && empty( $_SESSION['cart-items'] ) ) {
    $_SESSION['cart-items'] = $_COOKIE['cart-items'];
}

function is_home() {
    $fname = get_currenturl_filename();
    $exp = explode( '.php', $fname );
    if( ( count( $exp ) > 1 && get_currenturl_filename() === 'index.php' ) || count( $exp ) <= 1 ) {
        return true;
    }
    return false;
}

require_once 'post.php';