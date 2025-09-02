<?php
    // an associative array is a kind of array that uses key=>value pairs to store data. The data can be accessed using the keys instead of the index.
    
    $associative_array = array("name" => "John", "age" => 20, "gender" => "male");
    echo $associative_array["age"] . "<br>" . "<br>";

    // get all keys in an associative array
    $keys = array_keys($associative_array);

    echo "KEYS" . "<br>";
    foreach($keys as $key) {
        echo $key . "<br>";
    }

    // get all values in an associative array
    $values = array_values($associative_array);

    echo "<br>" . "VALUES" . "<br>";
    foreach($values as $value) {
        echo $value . "<br>";
    }
?>