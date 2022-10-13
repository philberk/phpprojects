<?php
// question mark, quote and option button to comment out multiple lines
// variables
$integer = 2;
$myString = "this is a test string";
$myFloat = 2.10;
$myBoolean = true;


// echo $myString;

$myArray = [1,2,3,4,5,6,7,9,10,11,200];
$names = ['mike','jake','phil','sara'];
// // you can't echo an array, we use var_dump in PHP.
// var_dump($myArray);

// //function declaration
// function myFunction($message, $number) {
//   return "$message $number";
// }

// //calling the function
// $test = myFunction('my message', 2);
// echo $test;
echo strlen($myString) . "\n" . $myArray[2];


// how to loop through an array
for ($i=0; $i<count($names); $i++ ) {
  echo $names[$i]. " ";
}

//associative array
$myAssociativeArray = [
  "keyOne" => 100,
  "keyTwo" => 200,
  "keyThree" => 'my key',
];

var_dump($myAssociativeArray);
// you cannot echo $myAssociativeArray[0] and find info, its hidden.


//foreach loops
foreach($myAssociativeArray as $key => $value){
  echo $key . " ";
  echo $value . " ";
}
?>
