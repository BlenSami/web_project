<?php
require_once 'db.php';



function get_product_by_id($p_id)
{
    $conn = conn();
    $query = "SELECT * FROM products WHERE pid = $p_id";
    $result = mysqli_query($conn, $query);
    $book = mysqli_fetch_assoc($result);
    mysqli_close($conn);
    return $book;
}



function get_all_products()
{
    $conn = conn();
    $query = "SELECT * FROM products";
    $result = mysqli_query($conn, $query);
    $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($conn);
    return $products;
}
