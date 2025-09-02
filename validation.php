<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form action="validation.php" method="post">
        username: <input type="text" name="username" placeholder="diddles" />
        <br />
        email: <input type="email" name="email" placeholder="user@email.com"/> 
        <br />
        age: <input type="text" name="age" placeholder="24"/> 
        <br />
        <input type="submit" value="submit" name="submit" />
    </form>
</body>
</html>

<?php 
    if(isset($_POST["submit"])) {
        $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

        if(empty($age)) {
            echo "Age is not valid" . "<br>";
        } else {
            echo "Age is {$age}" . "<br>";
        }

        if(empty($email)) {
            echo "Email is not valid" . "<br>";
        } else {
            echo "Email is {$email}" . "<br>";
        }
    }
?>