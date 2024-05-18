<?php
session_start();
require "../model/db_connect.php";

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}


// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["brands"])) {
    // Sanitize and validate selected brands
    $selected_brands = array_map($conn->real_escape_string, $_POST["brands"]);
    $brands_str = "'" . implode("','", $selected_brands) . "'";

    // Prepare SQL query to fetch products based on selected brands
    $sql = "SELECT * FROM products WHERE brand IN ($brands_str)";

    // Execute SQL query
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "Brand: " . $row["brand"] . ", Name: " . $row["name"] . ", Description: " . $row["description"] . ", Price: " . $row["price"] . "<br>";
        }
    } else {
        echo "No products found for the selected brands.";
    }
}

// Close database connection
$conn->close();
?>

