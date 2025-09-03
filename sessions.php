<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="sessions.php" method="post">
        username: <input type="text" name="username" placeholder="diddles" />
        <br />
        <input type="submit" value="submit" name="submit" />
    </form>

    <button><a href="logout.php">Logout</a></button>
</body>
</html>

<?php
    if(isset($_POST["submit"])) {
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $_SESSION["username"] = $username;
    }
    if(!isset($_SESSION["username"])) {
        echo "<br>" . "You are not logged in" . "<br>";
    } else {
        echo "<br>" ."Your username is {$_SESSION["username"]}" . "<br>";
    }
?>