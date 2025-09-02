<?php
    // the setcookie method takes 4 parameters: name, value, expiry time, path.
    // to delete the cookie, set the expiry time to `time() - 0`
    setcookie("username", "johndiddles", time() + (86400 * 30), "/");
    setcookie("age", "24", time() + (86400 * 30), "/");

    // reading the cookies
    if(isset($_COOKIE["username"])) {
        echo "Your user name is {$_COOKIE["username"]}" . "<br>";
    }
    if(isset($_COOKIE["age"])) {
        echo "You are {$_COOKIE["age"]} years old";
    }


?>