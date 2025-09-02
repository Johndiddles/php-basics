<?php
    $username = "johndiddles-123";
    $usernames = array ("John", "Jane", "Bob", "Alice");

    // join items in an array )similar to array.join() in javascript
    echo implode(", ", $usernames) . "<br>";

    // split a string by a character
    // similar to string.split() in javascript but this replaces the origin string and also returns multiple strings like an array but not technically an array of strings (not iterable)
    // !
    echo explode("-", $username) . "<br>";
    // !

    // cast string to uppercase
    echo strtoupper($username) . "<br>";

    // cast string to lowercase
    echo strtolower($username) . "<br>";

    // remove extra white spaces from a string
    echo trim("   Hello World        !") . "<br>";

    // get the length of a string
    echo strlen($username) . "<br>";

    // pad a string with a string character to fill up to a certain length
    echo str_pad($username, 20, "*") . "<br>";

    // get the first character of a string
    echo substr($username, 0, 1) . "<br>";

    // get the last character of a string
    echo substr($username, -1) . "<br>";

    // get a substring of a string
    echo substr($username, 0, 4) . "<br>";

    // get the position of a character in a string
    echo strpos($username, "d") . "<br>";

    // get the last position of a character in a string
    echo strrpos($username, "d") . "<br>";

    // compare two strings - returns 0 if they are the same and 1 if they are different (WEIRD)
    echo strcmp("hello", "hello") . "<br>";

    // randomize a string
    echo str_shuffle("hello") . "<br>";

    // reverse a string
    echo strrev("hello") . "<br>";

    // replace a character in a string
    echo str_replace("d", "a", $username) . "<br>";
?>