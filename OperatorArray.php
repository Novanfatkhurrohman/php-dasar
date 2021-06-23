<?php
//operator array 1
$first = [
    "firsName" => "novan"
];

$last = [
    "lastName" => "php"
];

$full = $first + $last;
var_dump($full);
echo "\n";

//operator array 2

$a = [
    "frist_Name" => "novan",
    "last_name" => "fatkhurrohman"
];

$b = [
    "last_name" => "fatkhurrohman",
    "frist_Name" => "novan",
];

var_dump($a == $b);
var_dump($a === $b);
