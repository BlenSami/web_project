<?php
require_once 'db.php';

function add_rating($user_id, $productId, $rating)
{
    $conn = conn();
    $query = "INSERT INTO rating (user_id, pid, rating) VALUES ($user_id, $productId, $rating)";
    mysqli_query($conn, $query);
    mysqli_close($conn);
}


function get_average_rating($pid)
{
    $conn = conn();
    $query = "SELECT AVG(rating) AS average_rating FROM rating WHERE pid = $pid";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $average_rating = $row['average_rating'];
    mysqli_close($conn);
    return $average_rating;
}
function get_no_of_rating($pid)
{
    $conn = conn();
    $query = "SELECT COUNT(pid) AS total FROM rating WHERE pid = $pid";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $total = $row['total'];
    mysqli_close($conn);
    return $total;
}
