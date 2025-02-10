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
        public function Cherry()
        {
            echo "Is cherry a fruit or a berry?";
        }


    }
    $cherry = new ChildClass("Cherry", "Red");
    $cherry->intro();
    echo "<br>";
    $cherry->cherry();

?>
</body>
</html>