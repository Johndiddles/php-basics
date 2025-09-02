<?php

    $foods = array("banana", "orange", "rice");

    // insert into array 
    array_push($foods, "mango", "beans");

    // remove last item from array
    array_pop($foods);

    // remove first item from array
    array_shift($foods);

    // add item to the start of an array
    array_unshift($foods, "peach");

    // reverse an array
    $reversed_array = array_reverse($foods);

    // count number of items in an array
    echo count($foods) . "<br>";


    foreach($foods as $food) {
        echo $food . "<br>";
    }

    echo("REVERSED ARRAY" . "<br>");
    foreach($reversed_array as $food) {
        echo $food . "<br>";
    }
?>