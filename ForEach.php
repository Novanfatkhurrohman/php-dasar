<?php
//tanpa foreach
$names = ["novan", "java", "php"];

for ($i = 0; $i < count($names); $i++) {
    echo "Data ke $i = $names[$i]" . PHP_EOL;
}

foreach ($names as $name) {
    echo "data $name" . PHP_EOL;
}


$person = [
    "FirstName" => "Novan",
    "LastName" => "fatkhurrohman",
    "Belajar" => "php"
];

foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}
