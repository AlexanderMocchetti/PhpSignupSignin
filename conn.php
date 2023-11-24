<?php

$conn = new mysqli('localhost', 'root', null, 'SIGNUP_SIGNIN');
if ($conn->connect_error) {
    die('DB failure '. $conn->connect_error);
}
