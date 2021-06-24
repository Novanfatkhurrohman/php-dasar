<?php

$sayHello = function (string $name) {
    echo "hello $name" . PHP_EOL;
};

$sayHello("novan");

//anonymous functiion sebagai argument

function sayGoodBye(string $names, $filter)
{
    $finalName = $filter($names);
    echo "Good Bye $finalName" . PHP_EOL;
};
$filterName = function (string $names): string {
    return strtoupper($names);
};
sayGoodBye("Golang", $filterName);


//mengakses luar cosurle

$firstName = "novan";
$lastName = "fatkhurrohman";

$sayHelloTon = function () use ($firstName, $lastName) {
    echo "hello $firstName $lastName" . PHP_EOL;
};

$sayHelloTon();
