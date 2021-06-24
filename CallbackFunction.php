<?php

function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("novan", "strtoupper");
sayHello("novan", "strtolower");
sayHello("novan", function (string $name): string {
    return strtoupper($name);
});
SayHello("novan", fn ($name) => strtolower($name));
