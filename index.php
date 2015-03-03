<?php
/*This is main execution index file*/

// Autoload
function __autoload($class_name) {
    include $class_name . '.php';
}
// Creating object of Calculator Class
$calculator = new Calculator;
$calculator->setOperands(array(4,2));

// Injecting Addition as Dependency
$calculator->setOperation(new Addition);

echo $calculator->process(); // 6

// Substraction

$calculator->setOperation(new Substraction); // 4 % 2

echo $calculator->process(); // 0

$calculator->setOperands(array(4, 2)); // 4 - 2

echo $calculator->process(); // 2


// Multiplication

$calculator->setOperation(new Multiplication); // 4 * 2
// Still it takes previous Operands
echo $calculator->process(); // 8

$calculator->setOperands(array(10, 2)); // 10 * 2

echo $calculator->process(); // 20

// Division

$calculator->setOperation(new Division); // 10/ 2

echo $calculator->process(); // 5

$calculator->setOperands(array(8, 2)); // 8 / 2

echo $calculator->process(); // 4