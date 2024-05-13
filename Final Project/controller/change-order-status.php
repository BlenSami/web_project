<?php
include "../model/order-model.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the order_id is provided
    if (isset($_POST['order_id'])) {
        $order_id = $_POST['order_id'];

        // Assuming you have a function to update the order status in your database
        if (cancel_order($order_id)) {
            echo "Cancel successfully.";
        } else {
            echo "Can't cancel now";
        }
    } else {
        echo "Order ID is not provided.";
    }
} else {
    // Redirect to home page or display an error message
    echo "Invalid request method.";
}
