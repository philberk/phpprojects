<?php

$number = 3;
// == "same value" === "same value and same type" Same value would be "2" == 2 (one is integer the other is string, this would be true) but 2 === "2" this would be false.
if($number == 2) {
  echo 'true';
}
else if($number === 3) {
  echo 'else if is true';
}else {
  echo 'false';
}




$secNumber = 15;
$thirdNumber = 5;

if($secNumber < 20 && $thirdNumber > 4) {
  echo "both conditions worked";
} else {
  echo "false";
}
?>
