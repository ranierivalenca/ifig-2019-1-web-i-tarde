<?php include 'init.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= TITLE ?> - Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="auth.php">
        <input type="text" name="email" placeholder="Email">
        <input type="password" name="senha" placeholder="Senha">
        <input type="submit" value="Ok">
    </form>
</body>
</html>