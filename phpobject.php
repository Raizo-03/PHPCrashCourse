<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
    //Class

    class Fruit{

        //Member Variables
        public $name;
        public $color;

        //Member Functions
        function set_name($name){
            $this->name = $name;
        }

        function get_name(){
            return $this->name;
        }
    }
         //Objects
        $apple = new Fruit();
        $banana = new Fruit();

        $apple ->set_name("Apple");
        $banana->set_name("Banana");


        echo $apple->get_name();
        echo "<br>";
        echo $banana->get_name();

?>
    
</body>
</html>