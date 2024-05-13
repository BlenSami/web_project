<?php
require '../model/product-model.php';

$all_products = array_slice(get_all_products(), 0, 5);


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

        <div class="best-seller" id="best-seller">
            <div style="margin-bottom: 20px;">
                <h2>All Products</h2>

            </div>
            <div class="best-items">
                <?php
                foreach ($all_products as $product) {
                ?>
                    <div class="e-single-item">

                        <img src="../vendor/<?= $product['imgdir'] ?>" alt="x">
                        <div class="meta-info">
                            <a href="product-page.php?product_id=<?= $product['pid'] ?>">Title: <?= $product['title'] ?></a>

                            <p>Taka: <?= $product['price'] ?></p>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>


    </div>
    <footer>
        <?php require_once('footer.php') ?>
    </footer>


</body>

</html>