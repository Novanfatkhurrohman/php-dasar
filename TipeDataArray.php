<?php

$values = array(1, 2, 3, 4, 5, 9, 0.1);
var_dump($values);

$name = ["novan", "php", "java"];
var_dump($name);
var_dump($name[0]);
$name[2] = "flutter";
unset($name[0]);
$name[] = "javascript";
var_dump($name);
var_dump(count($name));
echo "\n";
//map
$novan = array(
    "id" => "php",
    "name" => "novan",
    "age" => 24,
    "address" => array(
        "country" => "tegal",
        "number" => 13
    )
);
var_dump($novan["name"]);
var_dump($novan["address"]["country"]);
