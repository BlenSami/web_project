

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="CSS/headerfooter_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
</head>
<body>

    <header>
         <div class="header-container">
            <h2>Welcome</h2>
        </div>
        <div align="center">
        <div class="menu-item">
        <a href="student_dashboard.php" id="dashboardLink">Services</a>
        <div id="dropdownMenu" class="dropdown-content">
            <a href="index.php">Store</a><br>
            <a href="orderhistory.php">Order History</a><br>
            
        </div>
        </div>
            <a href="../Controllers/student_profile_controller.php">View Profile</a>
            
            
            <a href="../Views/update-customer.php">Update Profile</a>
            <a href="../Controllers/logoutController.php">Logout</a>
        </div>
    </header>

<section>
    <main>
    <div class="text">
    <h5>Experience the convenience</h5>
    <h2>Shopping<br><span>from your home</span></h2>
    <p>Explore our latest tech offerings and discover a world of innovation</p>
    </div>

    <div class="triangle">
        <span>
            <svg width="250" height="250" viewBox="-50 -50 300 300">
                <polygon class="triangle" stroke-linejoin="round" points="100,0 0,200 200,200" />
            </svg>
        </span>
        <span>
            <svg width="250" height="250" viewBox="-50 -50 300 300">
                <polygon class="triangle" stroke-linejoin="round" points="100,0 0,200 200,200" />
            </svg>
        </span>
        <span>
            <svg width="250" height="250" viewBox="-50 -50 300 300">
                <polygon class="triangle" stroke-linejoin="round" points="100,0 0,200 200,200" />
            </svg>
        </span>
        <span>
            <svg width="250" height="250" viewBox="-50 -50 300 300">
                <polygon class="triangle" stroke-linejoin="round" points="100,0 0,200 200,200" />
            </svg>
        </span>
        <span>
            <svg width="250" height="250" viewBox="-50 -50 300 300">
                <polygon class="triangle" stroke-linejoin="round" points="100,0 0,200 200,200" />
            </svg>
        </span>
    </div>
</main>
</section>

<footer>
    <p>All Rights Reserve</p>
    <div class="social-icons">
        <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://www.linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a>
    </div>
</footer>
<script src="JS/dashboard_dropdown.js"></script>
</body>
</html>