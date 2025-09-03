<?php 
    include "database.php";

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        Name: <input type="text" name="name" placeholder="name" />
        <br />
        Password: <input type="password" name="password" placeholder="password" />
        <br />
        <input type="submit" value="submit" name="submit" />
    </form>
</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        echo "$name . $password" . "<br>";

        $sql = "INSERT INTO users (user, password) VALUES ('$name', '$password')";
        try {
           mysqli_query($conn, $sql);
           echo "Created user successfully";
        } catch (mysqli_sql_exception $e) {
            echo "Error: " . $e->getMessage();
        }
        
    }
    mysqli_close($conn)
?>