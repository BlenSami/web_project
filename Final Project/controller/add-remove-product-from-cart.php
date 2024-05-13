<?php
session_start();
require('../model/product-model.php');

$pid = $_GET["pid"];
$action = $_GET['action'];
$cart = $_SESSION['cart'];
$return_url = $_GET['return_url'];

// Validate

if ($action == 1) { //add
    array_push($cart, get_product_by_id($pid));
    $_SESSION['cart'] = $cart;
    header("Location: ../view/" . $return_url . "&status=13");
    exit();
} else if ($action == 2) { // remove
    foreach ($cart as $key => $product) {
        if ($product['pid'] === $pid) {
            unset($cart[$key]);
            break;
        }
    }
    $_SESSION['cart'] = $cart;
    header("Location: ../view/" . $return_url . "&status=14");
    exit();
}

header("Location: ../view/" . $return_url . "&status=-1");
