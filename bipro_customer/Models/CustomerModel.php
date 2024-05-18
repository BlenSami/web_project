<?php
require_once('db.php');
function updateCustomer($id, $name, $phoneNum, $email, $password) {
    $db = getConnection();
    $stmt = $db->prepare("UPDATE registration SET name=?, phoneNum=?, email=?, password=? WHERE username=?");
    $stmt->bind_param("ssssi", $name, $phoneNum, $email, $password, $id);
    return $stmt->execute();
}
?>