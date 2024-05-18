<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location: login_page.php');
    exit();
}
$userId = $_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="CSS/nightmode.css">
    <link rel="stylesheet" href="CSS/headerfooter_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="JS/night-mode.js"></script>
    <style>
        .form-container {
            width: 30%; /* Adjust the width as needed */
            margin: 60px auto; /* This centers the container horizontally */
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <?php include 'header.html'; ?>
    <header>
        
        <div align="center">
            <div class="menu-item">
                <a href="student_dashboard.php" id="dashboardLink">Dashboard</a>
                <div id="dropdownMenu" class="dropdown-content">
                    <a href="index.php">Store</a><br>
                    <a href="orderhistory.php">Order History</a><br>
                </div>
            </div>
            <a href="../Controllers/student_profile_controller.php">View Profile</a>
            <a href="../Controllers/logoutController.php">Logout</a>
        </div>
    </header>

    <div class="form-container">
        <h3>Update Information</h3>
        <h1>Update Customer Information</h1>
    <form action="../Controllers/UpdateCustomerInfo.php" method="post">
        <input type="hidden" name="id" id="id" value="<?php echo htmlspecialchars($userId); ?>">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br>
        <label for="phoneNum">Phone Number:</label><br>
        <input type="text" id="phoneNum" name="phoneNum" required><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Update">
    </form>
    </div>

    <!-- <footer>
        <div class="social-icons">
            <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://www.linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a>
        </div>
    </footer> -->
    <script src="JS/dashboard_dropdown.js"></script>
</body>
</html>
