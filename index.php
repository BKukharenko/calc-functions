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

<br>

<?php

//Multiply numbers function
function multiply ($number1, $number2) {

  $result = $number1 * $number2;

  return "Product of {$number1} and {$number2}:  {$result}";
}

echo multiply(5, 10); ?>

<br>

<?php

//Divide numbers function
function divide ($number1, $number2) {

  $result = $number1 / $number2;

  return "Division of {$number1} and {$number2}:  {$result}";
}

echo divide(16, 2); ?>

