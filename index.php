<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin page</title>
</head>
<body>
    <form action="handle_signin.php" method="post">
        <label for="email">Email:</label>
        <input type="email" name="email">
        <label for="password">Password:</label>
        <input type="password" name="password">
        <button type="submit">Invia</button>
    </form>
    <a href="signup.php">Registrati</a>
</body>
</html>