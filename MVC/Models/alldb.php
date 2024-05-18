 <?php
require_once('db.php');

function auth($username, $password)
{
    global $con;
    $sql = "SELECT * FROM user WHERE username = '$username' OR email = '$email'";
    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($res, MYSQLI_ASSOC);

    if ($row=1) {
        return true;
    } else {
        return false;
    }
}
?>