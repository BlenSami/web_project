<!--  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Welcome</title>
</head>
<body>

<?php
include 'header.php';
?>

    <h2 align="center">Hello! <?php echo htmlspecialchars($user['username']); ?></h2>




</body>
</html>