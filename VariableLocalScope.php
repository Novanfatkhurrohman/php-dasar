<?php

function createName()
{
    $name = "novan"; //LOCAL SCOPE
}

createName();
echo $name . PHP_EOL;
