<?php

function foo()
{
    echo "foo" . PHP_EOL;
}
function bar()
{
    echo "bar" . PHP_EOL;
}


$functionFoo = "foo";
$functionFoo();

$functionBar = "bar";
$functionBar();


function sayHello(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName " . PHP_EOL;
}


function sampleName(string $name): string
{
    return "sample $name";
}
sayHello("Novan", "sampleName");
sayHello("Novan", "strtoupper");
sayHello("Novan", "strtolower");
