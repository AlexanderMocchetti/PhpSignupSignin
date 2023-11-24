<?php
require_once("conn.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup page</title>
</head>
<body>
   <form action="handle_signup.php" method="post">
    <label for="name">Nome:</label>
    <input type="text" name="name">

    <label for="surname">Cognome:</label>
    <input type="text" name="surname">

    <label for="email">Email:</label>
    <input type="email" name="email">

    <label for="password">Password:</label>
    <input type="password" name="password">

    <label for="year_of_birth">Anno di nascita:</label>
    <input type="number" name="year_of_birth">

    <label for="hobby">Scegli un hobby:</label>
    <select name="hobby">
    <?php
        $result = $conn->query('SELECT ID, DESCRIPTION FROM HOBBY');
        while ($row = $result->fetch_assoc()) {
            $hobby_id = $row['ID'];
            $hobby_description = $row['DESCRIPTION'];
            echo "<option value='$hobby_id'>$hobby_description</option>";
        }
    ?>
    </select>
    <button type="submit">Invia</button>
   </form> 
</body>
</html>