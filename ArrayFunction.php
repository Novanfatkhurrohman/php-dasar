<?php

$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];


$result = array_map($mapFunction = fn (int $value) => $value * 10, $data);
var_dump($result);

rsort($data);

var_dump(array_keys($data));
var_dump(array_values($data));
