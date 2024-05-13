<?php
require_once 'db.php';

function place_order($user_id, $pid, $quantity, $total_price)
{
    $conn = conn();
    $query = "INSERT INTO orders (user_id, pid, quantity, total_price, status) VALUES ($user_id, $pid, $quantity, $total_price, 'pending')";
    mysqli_query($conn, $query);
    mysqli_close($conn);
}

function get_user_orders($user_id)
{
    $conn = conn();
    $query = "SELECT * FROM orders WHERE user_id = $user_id";
    $result = mysqli_query($conn, $query);
    $orders = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($conn);
    return $orders;
}

function cancel_order($orderId)
{
    $conn = conn();
    $status = 'cancelled';
    $query = "UPDATE orders SET status = '$status' WHERE order_id = $orderId";
    $result = mysqli_query($conn, $query);


    if ($result) {

        mysqli_close($conn);
        return true;
    } else {

        mysqli_close($conn);
        return false;
    }
}



function has_ordered_product($user_id, $pid)
{
    $conn = conn();
    $query = "SELECT COUNT(*) AS count FROM orders WHERE user_id = $user_id AND pid = $pid";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $count = $row['count'];
    mysqli_close($conn);
    return $count > 0;
}
