<?php

$firstName = "novan";
$lastName = "last";

$sayHello = fn () => "hello $firstName $lastName " . PHP_EOL;

echo $sayHello();
