<?php

$gender = "Wanita";

$hi = null;
if ($gender == "Pria") {
    $hi = "hi bro";
} else {
    $hi = "hai nona";
}

echo $hi . PHP_EOL;
//tenary operator
$hi = $gender == "Pria" ? "hai bro" : "hai nona";
echo $hi . PHP_EOL;
