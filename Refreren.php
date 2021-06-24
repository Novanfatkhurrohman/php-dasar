<?php

$name = "novan";

$otherName = &$name;

$otherName = "budi";

echo $name . PHP_EOL;


//pass refrerence

function increment(int &$value)
{
    $value++;
}
$counter = 1;
Increment($counter);
echo $counter . PHP_EOL;


//MENGGEBALIKAN REFRENCE

function &getValue()
{
    static $value = 100;
    return $value;
}

$a = &getValue();
$a = 200;

$b = &getValue();
echo $b . PHP_EOL;
