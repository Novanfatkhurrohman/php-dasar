<?php

$nilai = "A ";

switch ($nilai) {
    case "A":
        echo "anda lulus dengan nilai terbaik" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "anda lulus nilai" . PHP_EOL;
        break;
    case "D":
        echo "anda lumayan" . PHP_EOL;
        break;
    default:
        echo "anda remidi" . PHP_EOL;
}
