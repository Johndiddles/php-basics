<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        password: <input type="password" name="password" placeholder="password1234" />
        <br />
        <input type="submit" value="submit" name="submit" />
    </form>
</body>
</html>
<?php
    $defaultPassword = "password1234";
    $hash = password_hash($defaultPassword, PASSWORD_DEFAULT);
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $password = $_POST["password"];
        if (password_verify($password, $hash)) {
            echo "Password is correct";
        } else {
            echo "Password is incorrect";
        }
    }
?>