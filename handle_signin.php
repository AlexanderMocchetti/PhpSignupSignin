<?php
require_once("conn.php");
$email = $_POST["email"];
$password_hash = md5($_POST["password"]);

$sql = "SELECT NAME, SURNAME FROM USER WHERE EMAIL = '$email' AND PASSWORD_HASH = '$password_hash'";
$result = $conn->query($sql);
if ($result->num_rows == 0) {
    echo "Email e/o password incorrette";
}
else {
    $row = $result->fetch_assoc();
    echo "Benvenuto {$row['NAME']} {$row['SURNAME']}!";
}