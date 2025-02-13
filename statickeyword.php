<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    class MyClass {

        // The self keyword is used in object-oriented programming (OOP) to refer to the current class 
        // (not an instance of the class). It is mainly used for accessing static properties and methods within the same class.    
        //The variable retains its value even after the function finishes execution.
  
          static $name = "PHP";
    
        static function showName() {
            echo self::$name; // Refers to the static property $name in the same class
        }

        function counter(){
            static $count=0;

            $count++;
            echo "Count: $count <br>";
        }

        static $count = 0;
    
        static function increment() {
            self::$count++;
            echo "Static Count: " . self::$count . "<br>";
        }



    }
    
    MyClass::showName(); // Output: PHP - uses colon  :: to access static function showName

    $myClass = new MyClass();
    $myClass->counter(); // Output: Count: 1
    $myClass->counter(); // Output: Count: 2
    $myClass->counter(); // Output: Count: 3
    

    $myClass ->increment(); // Static Count: 1
    $myClass->increment(); // Static Count: 2
    $myClass  ->increment(); // Static Count: 3



//     2. :: (Scope Resolution Operator)
// The :: (double colon) is called the scope resolution operator, and it is used to access:

// Static properties and methods (self::)
// Constants (ClassName::CONSTANT)
// Overridden methods in parent classes (parent::)


//INHERITANCE
class Animal {
    static function makeSound() {
        echo "Some sound";
    }
}

class Dog extends Animal {
    static function makeSound() {
        parent::makeSound(); // Calls the parent class method
        echo " - Bark!";
    }
}

Dog::makeSound(); // Output: Some sound - Bark!


?>

    
</body>
</html>