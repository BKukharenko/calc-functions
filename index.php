<?php

//Add numbers function
function add ($number1, $number2) {

  $result = $number1 + $number2;

  return "Sum of {$number1} and {$number2}:  {$result}";
}

echo add(45, 20) ?>

<br>

<?php

//Subtract numbers function
function subtract ($number1, $number2) {

  $result = $number1 - $number2;

  return "Difference between {$number1} and {$number2}:  {$result}";
}

echo subtract(45, 20); ?>
