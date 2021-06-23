<?php

// goto a;
// echo "Huruf AKU" . PHP_EOL;

// a:
// echo "Huruf A" . PHP_EOL;

$counter = 1;

while (true) {
    echo "perulangan ke - $counter" . PHP_EOL;
    $counter++;

    if ($counter >= 10) {
        goto end;
    }
}
end:
echo "end loop";
