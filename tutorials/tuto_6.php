<?php
echo "Enter le premier number : ";
$number1 = intval(fgets(STDIN));

echo "Enter the second number : ";
$number2 = intval(fgets(STDIN));

echo "choose the operation (+, -, *, /) : ";
$operation = trim(fgets(STDIN));

switch ($operation) {
  case "+":
    $result = $number1 + $number2;
    break;
  case "-":
    $result = $number1 - $number2;
    break;
  case "*":
    $result = $number1 * $number2;
    break;
  case "/":
    if ($number2 == 0) {
      echo "Division by zero impossible !\n";
    } else {
      $result = $number1 / $number2;
    }
    break;
  default:
    echo "invalid operation \n";
}

if (isset($result)) {
  echo "the result is : " . $result . "\n";
}
