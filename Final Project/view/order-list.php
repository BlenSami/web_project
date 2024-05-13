<?php
session_start();
require '../model/order-model.php';

require('../model/user-model.php');
$user = $_SESSION['user'];


$orders = get_user_orders($user['user_id']);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Home</title>
    <link rel="stylesheet" href="css/customerHomeStyles.css">
</head>

<body>
    <?php require_once('navbar.php') ?>

    <div class="container">

        <?php
        echo "<table border='1'>";
        echo "<tr>
                <th>Order ID</th>
                <th>User ID</th>
                <th>Quantity</th>
                <th>Total Price</th>
                <th>Order Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>";
        foreach ($orders as $order) {
            echo "<tr>";
            echo "<td>{$order['order_id']}</td>";
            echo "<td>{$order['user_id']}</td>";
            echo "<td>{$order['quantity']}</td>";
            echo "<td>{$order['total_price']}</td>";
            echo "<td>{$order['order_date']}</td>";
            echo "<td>{$order['status']}</td>";
            echo "<td>
                    <form method='post' action='../controller/change-order-status.php'>";
            echo "<input type='hidden' name='order_id' value='{$order['order_id']}'>";
            echo "<button type='submit' class='btn'>Cancle Order</button>";
            echo "</form>
                </td>";
            echo "</tr>";
        }
        echo "</table>";
        ?>


    </div>
    <footer>
        <?php require_once('footer.php') ?>
    </footer>


</body>

</html>