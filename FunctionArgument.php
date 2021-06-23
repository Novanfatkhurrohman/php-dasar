<?php

// function sayHello($name)
// {
//     echo "hello $name" . PHP_EOL;
// }

// SayHello("novan");

//default value

function sayHello($name = "anonimous")
{
    echo "hello $name" . PHP_EOL;
}
SayHello();
SayHello("novan");

function sum(int $first, int $last)
{
    $total = $first + $last;
    echo "Total $first + $last = $total" . PHP_EOL;
}
sum(100, 100);
sum("100", "100");
sum(true, false);


function sumAll(...$values)
{
    $totals = 0;
    foreach ($values as $value) {
        $totals += $value;
    }
    echo "total " . implode(", ", $values) . " = $totals" . PHP_EOL;
}

sumAll(1, 2, 3, 4, 5);
