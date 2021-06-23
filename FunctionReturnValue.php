<?php
//satu 
function sum(int $first, int $second)
{
    $total = $first + $second;
    return $total;
}

$result = sum(10, 10);
var_dump($result);

//dua
function getNilai(int $value): string
{
    if ($value >= 80) {
        return "A";
    } else if ($value >= 70) {
        return "B";
    } else if ($value >= 60) {
        return "C";
    } else {
        return "D";
    }
}

$score = getNilai(70);
var_dump($score);
