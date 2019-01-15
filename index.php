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

<br>

<?php

//Exponentiation function
function exponentiation ($baseNumber, $exponent) {

  $result = 1;

  for ($i=1; $i <= $exponent; $i++) {
    $result = $result * $baseNumber;
  }

  return  "Exponentiation of {$baseNumber} to {$exponent}:  {$result}";
}

echo exponentiation(16, 2); ?>

<br>

<?php

//Square root function
function squareToRoot ($number) {

  if ($number === 0 || $number === 1) {
    return "Can't get square root from {$number}";
  }

  $i = 1;
  $result = 1;

  while ($result <= $number) {
    $i++;
    $result = $i * $i;
  }

  $root = $i -1;

  return "Square root of {$number}: {$root}" ;
}

echo squareToRoot(1); ?>

<br>

<?php

//Factorial function
function factorial ($number) {

  $result = 1;

  for ($i = $number; $i>=1;$i--) {
    $result = $result * $i;
  }

  return "Factorial of {$number}: {$result}";
}

echo factorial(6);?>

<br>

<?php

//Sin function
function mySin($number) {

  $result = sin($number);

  return "Sin of {$number}: {$result}";
}

echo mySin(60); ?>

<br>

<?php

//Cos function
function myCos($number) {

  $result = cos($number);

  return "Cos of {$number}: {$result}";
}

echo myCos(60); ?>

<br>

<?php

//Tan function
function myTan($number) {

  $result = tan($number);

  return "Tan of {$number}: {$result}";
}

echo myTan(60); ?>

  <br>

<?php

//Cot function
function myCot($number) {

  $result = tan(M_PI_2 - ($number));

  return "Cot of {$number}: {$result}";
}

echo myCot(60); ?>

<br>

<?php

//Atan function function
function myAtan($number) {

  $result = atan($number);

  return "Atan of {$number}: {$result}";
}

echo myAtan(60); ?>

<br>

<?php

//Arcctg function
function arcCtg ($number){

    $result = (M_PI/2) - atan($number);
    return "Arcctg of {$number}: {$result}";
}

echo arcCtg(60);






