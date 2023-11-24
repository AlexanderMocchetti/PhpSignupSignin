<?php
require_once("conn.php");

$sql = "SELECT ID FROM USER WHERE EMAIL = '{$_POST['email']}'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "Utente già esistente";
} else {
    $password_hash = md5($_POST['password']);
    $sql = "INSERT INTO USER (NAME, SURNAME, EMAIL, PASSWORD_HASH, YEAR_OF_BIRTH, ID_HOBBY) VALUES ('{$_POST['name']}', '{$_POST['surname']}', '{$_POST['email']}', '$password_hash', {$_POST['year_of_birth']}, {$_POST['hobby']})";
    $conn->query($sql);
    echo "Registrazione avvenuta con successo!";
}