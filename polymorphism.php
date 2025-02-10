<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php

    class ParentClass{
        public $name;
        public $color;



        public function __construct($name, $color){
            $this->name = $name;
            $this->color = $color;
        }


        public function intro(){
            echo "A {$this->name} is a fruit and the color of it is {$this->color}";

        } 
    }


    class ChildClass extends ParentClass{
        public $weight;
        public function Cherry()
        {
            echo "Is cherry a fruit or a berry?";
        }

        public function __construct($name, $color, $weight){
            $this->name = $name;
            $this->color = $color;
            $this->weight = $weight;
        }

        public function intro(){
            echo "This is a {$this->name}, it's weight is mostly {$this->weight} and it has color of {$this->color}." ;   
        }

    }
    $cherry = new ChildClass("Cherry", "Red", "5g");
    echo "<br>";
    $cherry->intro();
    echo "<br>";
    $cherry->cherry();

?>
</body>
</html>