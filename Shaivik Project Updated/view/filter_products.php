<!DOCTYPE html>
<html>
<head>
    <title>Filter Products by Brand</title>
</head>
<body>
    <h2>Filter Products by Brand</h2>
    <form method="POST" action="filtered_products.php">
        <label>Select Brand:</label><br>
        <input type="checkbox" name="brands[]" value="brand1"> Brand 1<br>
        <input type="checkbox" name="brands[]" value="brand2"> Brand 2<br>
        <input type="checkbox" name="brands[]" value="brand3"> Brand 3<br>
        <input type="submit" value="Filter">
    </form>
</body>
</html>
