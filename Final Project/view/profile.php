<?php
session_start();
require('../model/user-model.php');
$user = $_SESSION['user'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/profileStyles.css">
</head>

<body>
    <?php require_once('navbar.php') ?>
    <h1 align="center">Profile</h1>
    <div class="container">

        <table class="profile-table" id="profile-table">
            <tr>
                <td>Fullname:</td>
                <td><?= $user['full_name'] ?></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><?= $user['email'] ?></td>
            </tr>
            <tr>
                <td>Mobile Number:</td>
                <td><?= $user['mobile_number'] ?></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><?= $user['address'] ?></td>
            </tr>
            <tr>
                <td>Username:</td>
                <td><?= $user['username'] ?></td>
            </tr>

        </table>

        <a href="customer-home.php" class="btn" style="margin-top: 20px;">Back</a>
    </div>
    <?php require_once('footer.php') ?>
</body>

</html>