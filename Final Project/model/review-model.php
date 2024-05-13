<?php
require_once 'db.php'; // Include the file with the database connection function

function add_review($user_id, $pid, $review_text)
{
    $conn = conn();
    $review_text = mysqli_real_escape_string($conn, $review_text); // Sanitize the review text
    $query = "INSERT INTO review (user_id, pid, review_text) VALUES ($user_id, $pid, '$review_text')";
    mysqli_query($conn, $query);
    mysqli_close($conn);
}

function get_reviews_for_products($pid)
{
    $conn = conn();
    $query = "SELECT * FROM review WHERE pid = $pid";
    $result = mysqli_query($conn, $query);
    $reviews = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($conn);
    return $reviews;
}
