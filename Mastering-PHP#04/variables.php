<?php

// Tips and tricks PHP || A little bit more about PSR -> PHP Standard Recommendation

$variableInt = 100;

$variable_float = 10.5; // Snake Case

$variableArray = [5,10,15,20]; // CamelCase
$variableBoolean = true;
$variableString = 'Level PHP';
$variableNull = null;
$variableObject = new \stdClass();

// Using variables
echo $variableInt . PHP_EOL;
echo $variable_float . PHP_EOL;
echo $variableArray[0] . PHP_EOL;
echo $variableBoolean . PHP_EOL;
echo $variableString . PHP_EOL;
echo $variableNull . PHP_EOL;

// Getting types of variables
echo 'INT: ' . gettype($variableInt) . PHP_EOL;
echo 'FLOAT: ' . gettype($variable_float) . PHP_EOL;
echo 'Array: ' . gettype($variableArray) . PHP_EOL;
echo 'BOOLEAN: ' . gettype($variableBoolean) . PHP_EOL;
echo 'STRING: ' . gettype($variableString) . PHP_EOL;
echo 'NULL: ' . gettype($variableNull) . PHP_EOL;
echo 'OBJECT: ' . gettype($variableObject) . PHP_EOL;

// Creating a new variable using old's variables
$calc = $variableInt + $variable_float;
echo 'Result: ' . $calc . PHP_EOL;

$variableOriginal = 10;
$variableRef = &$variableOriginal; // Getting values from original variable

echo 'Before variable Original value: ' . $variableOriginal . PHP_EOL;
echo 'Before variable Ref value: ' . $variableRef . PHP_EOL;

/* If change the value of the reference var.. 
   the value of the original var.. is also changed 
   WARNING!
*/
$variableRef = 20;

echo 'After changed the value of the variableRef: ' . $variableOriginal . PHP_EOL;
echo 'After changed the value of the variableRef: ' . $variableRef . PHP_EOL;
