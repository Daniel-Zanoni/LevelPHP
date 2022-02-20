<?php

$channel = 'Level PHP';
$playlist = 'Dominando o PHP - Do Zero ao Deploy';
$age = 21;
$bool = true;
$phrase = ['Subscribe', 'Channel'];

echo 'Channel: ' . $GLOBALS['channel'] . PHP_EOL;
echo 'Playlist: ' . $GLOBALS['playlist'] . PHP_EOL;
echo 'Age: ' . $GLOBALS['age'] . PHP_EOL;
echo 'Bool: ' . $GLOBALS['bool'] . PHP_EOL;
echo 'Phrase: ' . $GLOBALS['phrase'][0] . '-' . $GLOBALS['phrase'][1] . PHP_EOL;

// GLOBALS not will work in scope closed
function test()
{
  $variable1 = 'Variable 1';
  $variable2 = 'Variable 2';
}

var_dump($GLOBALS);

test();