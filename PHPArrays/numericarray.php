<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
    //Numeric Array

    $names = array("Peter","Quagmire","Joe");


    foreach ($names as $name) {
        echo("". $name ."");

    }


    //or

    $namess[0] = "Peter";
    $namess [1] = "Quagmire";
    $namess [2] = "Joe";

    echo $names [1] . " and " . $names [2] ." are ". $names [0] . "'s neighbors";

?>
    
</body>
</html>