<?php
include_once '../Models/CustomerModel.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $phoneNum = $_POST["phoneNum"];
    $email = $_POST["email"];
    $password = $_POST["password"];


    $result = updateCustomer($id, $name, $phoneNum, $email, $password);

    if ($result) {
        echo "Customer information updated successfully!";
    } else {
        echo "Error updating customer information.";
    }
}
?>
