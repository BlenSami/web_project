<?php
session_start();
$cart = $_SESSION['cart'];
$total_price = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>

    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php require_once('navbar.php') ?>

    <div class="container">
        <h1 align="center">Cart</h1> <br>

        <?php
        echo "<div class='cart-container'>";
        foreach ($cart as $product) {
            $total_price += $product['price'];
        ?>

            <div class="product-item">
                <a href="product-page.php?product_id=<?= $product['pid'] ?>">Title: <?= $product['title'] ?></a>
                <img src="../vendor/<?= $product['imgdir'] ?>" alt="x"><br>
                Taka: <?= $product['price'] ?><br><br>
                <div class="removeFromCart">

                    <a class="btn" href="../controller/add-remove-product-from-cart.php?pid=<?= $product['pid'] ?>&action=2&return_url=cart.php?">Remove
                        from Cart</a>
                </div>
            </div>

        <?php
        }
        echo "</div>"

        ?>
        <br>
        <div style="display: flex; gap:20px; align-items: center;">
            <div><a href="customer-home.php" class="btn">Back</a></div>
            <div>
                <a href="checkout.php" class="btn">Checkout</a>
            </div>
            <h3>Total Amount: <?= $total_price ?></h3>
        </div>
    </div>

    <?php require_once('footer.php') ?>
</body>

</html>