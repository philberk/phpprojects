<?php
// class : like a blueprint. If object is car, then we need to declare the make, model, year, etc.
class Car {
  //these are two variables in this class. They are like properties. Variables are like properties inside classes.
  public $make;
  public $model;
  private $amountOfWheels;
  public static $dealer; // let's imagine all these objects to have the same dealer.
   function __construct($make, $model){
    // $this represents the Car class.
      $this ->make = $make;
      $this -> model= $model;
      self ::$dealer = 'Serkan Usta';
   }
   public function setAmountOfWheels($amount){
    $this -> amountOfWheels = $amount;
   }
}


//object
$myCar = new Car('land rover','defender');
$myCar -> $amountOfWheels = 2;

// $myCar -> make = 'land rover';
// $myCar -> model = 'defender';
// this is what I would have to code if I didn't create a construct function to assing value to the variables..

var_dump($myCar::$dealer);
// $myCarsMake = $myCar -> make;
// echo($myCarsMake);
?>


// when it is a public static (line 7), you need to do ::$variable name on var_dump
