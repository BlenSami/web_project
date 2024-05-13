<?php

require('../model/user-model.php');
require('../model/product-model.php');

require('../model/rating-model.php');
require('../model/order-model.php');
require('../model/review-model.php');
require '../controller/cart-essential-functions.php';

if (!isset($_GET['product_id'])) {
    $_GET['product_id'] = 1;
}

$products = get_product_by_id($_GET['product_id']);

$reviews = get_reviews_for_products($products['pid']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Page</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php require_once('navbar.php') ?>
    
    <div class="container">


        <div class="product-details-container">
            <div class="product-details-img">
                <img src="../vendor/<?= $products['imgdir'] ?>" alt="x">
            </div>

            <div class="product-details">
                <h2><?= $products['title'] ?></h2>
                <p>Description: <?= $products['description'] ?></p>
                <p>Price: <?= $products['price'] ?> TK</p>
                <p>In Stock: <?= $products['stock_quantity'] ?> </p>

                <?php if (is_exist_in_cart($products['pid'])) : ?>
                    <p class="addedTo">Product already in the <a href="cart.php" style="text-decoration: underline; font-weight: 700; color: #000">Cart</a></p>
                <?php else : ?>
                    <a href="../controller/add-remove-product-from-cart.php?pid=<?= $products['pid'] ?>&action=1&return_url=product-page.php?pid=<?= $products['pid'] ?>">
                        <button class="btn">Add to Cart</button>
                    </a>
                <?php endif; ?>
            </div>
        </div>




        <p>Average Rating: <?= get_average_rating($products['pid']) ?></p>
        <?= get_no_of_rating($products['pid']) ?> people have rated this. <br>




        <h3 style="margin: 20px 0;">Give Rating</h3>
        <?php
        if (has_ordered_product($_SESSION['user']['user_id'], $products['pid'])) {
        ?>
            <form action="../controller/add-rating-controller.php" method="post">
                <input type="hidden" name="pid" value="<?= $products['pid'] ?>">
                <input type="hidden" name="return_url" value="product-page.php?product_id=<?= $products['pid'] ?>">

                <input type="radio" name="rating" value="1"> 1
                <input type="radio" name="rating" value="2"> 2
                <input type="radio" name="rating" value="3"> 3
                <input type="radio" name="rating" value="4"> 4
                <input type="radio" name="rating" value="5"> 5 <br><br>
                <button type="submit" class="btn">Submit Rating</button>
            </form>
        <?php
        } else {
        ?>
            <p>Order first to give rating Rate</p>
        <?php
        }
        ?>







        <h3 style="margin: 20px 0;">Reviews</h3>
        <div class="review-container">
            <?php
            foreach ($reviews as $review) {
            ?>
                <div class="review-item">
                    <p style="font-weight: bold;">Name: <?= get_user_by_id($review['user_id'])['username'] ?></p>
                    <p><?= $review['review_text'] ?></p>
                </div>
            <?php
            }
            ?>
        </div>

        <h3 style="margin: 20px 0;">Leave a Review</h3>
        <?php
        if (has_ordered_product($_SESSION['user']['user_id'], $products['pid'])) {
        ?>
            <form action="../controller/add-review-controller.php" method="post">
                <input type="hidden" name="pid" value="<?= $products['pid'] ?>">
                <input type="hidden" name="return_url" value="product-page.php?product_id=<?= $products['pid'] ?>">

                <textarea name="review" rows="10" cols="50"></textarea><br>
                <button class="btn">Submit</button>
            </form>
        <?php
        } else {
        ?>
            **Order first to Review
        <?php
        }
        ?>
    </div><br>
    <div style="display: flex; justify-content: center;">
        <a href="customer-home.php" class="btn">Back</a>
    </div>

    <?php require_once('footer.php') ?>
</body>

</html>