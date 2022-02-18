<?php

// SOME TYPE OF DATAS.

// Boolean
true;
false;

// Integer
5;
10;

// Float & Double
2.5;
7.4;

// String
'String';
"String";

// Array
array(
  57,
  83,
  true,
  false,
  'LevelPHP',
  10.77,
  [
    'Name' => 'Daniel',
    'Age' => '21',
  ]
);
[]; // >= PHP 5.6 +

// Object
$stdClass = new stdClass();
$stdClass-> name = 'Daniel';
$stdClass-> age = 21;

// Callback & Callable
function showName($string) 
{
  echo $string . PHP_EOL;
}

call_user_func('showName', 'Level PHP!');

// Iterable
function loop(iterable $iterable)
{
  foreach ($iterable as $value) {
    echo $value . PHP_EOL;
  }
}

//loop([-10, 'Level PHP', true, false, 10.6]);
//loop(range(0,50));

function generator()
{
  yield 'Generator 1';
  yield 'Generator 2';
  yield 'Generator 3';
  yield 'Generator 4';
}

loop(generator());

// Type of special data
$openDir = openDir('../');
$fopen = fopen('types-of-data.php', 'r');
$fgets = fgets($fopen);
var_dump($fgets);

// Null
$var = null;
var_dump(is_null($var));

// Mixed (Functions can get some types of params: string, bool etc..)

/**
 * @param mixed $type
 * @return bool|int|string
 */

function testMixed($type) 
{
  if (is_string($type)) {
    return 'Is a string';
  }
  if (is_bool($type)) {
    return true;
  }
  if (is_int($type)) {
    return $type;
  }
}

var_dump(testMixed(50));

// Number
function testNumber($number) 
{
  if (is_int($number)) {
    return $number;
  }
  if (is_float($number)) {
    return $number;
  }
}

$return = testNumber(9.99);
echo $return;

// Void
function testNoReturn(): void
{
  echo 'Function type VOID';
}

testNoReturn();