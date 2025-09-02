<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        username: <input type="text" name="username" placeholder="diddles" />
        <br />
        age: <input type="text" name="age" placeholder="24"/> 
        <br />
        <input type="submit" value="submit" name="submit" />
    </form>
</body>
</html>

<?php
    if(isset($_POST["submit"])) {
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);

        echo "You username is $username and your age is {$age}";
    }
?>