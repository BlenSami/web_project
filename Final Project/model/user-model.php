<?php
require_once 'db.php';

function check_user_existence($username, $password)
{
    $conn = conn();
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);


    if ($user && $password === $user['password']) {
        return true;
    } else {
        return false;
    }
}
function create_user($username, $email, $password, $role, $status, $full_name,  $address, $mobile_number)
{
    $conn = conn();
    $query = "INSERT INTO users (username, email, password, role, status, full_name, address, mobile_number) 
              VALUES ('$username', '$email', '$password', '$role', '$status', '$full_name', '$address', '$mobile_number')";
    mysqli_query($conn, $query);
    mysqli_close($conn);
}


function get_user_by_username($username)
{
    $conn = conn();
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);
    mysqli_close($conn);
    return $user;
}
function get_user_by_id($user_id)
{
    $conn = conn();
    $query = "SELECT * FROM users WHERE user_id = $user_id";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);
    mysqli_close($conn);
    return $user;
}
