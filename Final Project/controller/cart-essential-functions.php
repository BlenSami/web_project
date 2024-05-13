<?php
session_start();
function is_exist_in_cart($p_id)
{
    $cart = $_SESSION['cart'];
    foreach ($cart as $product) {
        if ($product['pid'] === $p_id) {
            return true;
        }
    }
    return false;
}
