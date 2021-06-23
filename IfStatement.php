<?php

$nilai = 45;
$absen = 30;

if ($nilai >= 75 && $absen >= 75) {
    echo " nilai anda a" . PHP_EOL;
} else if (($nilai >= 65 && $absen >= 65)) {
    echo "nilai anda b" . PHP_EOL;
} else if (($nilai >= 55 && $absen >= 55)) {
    echo "nilai anda c" . PHP_EOL;
} else if (($nilai >= 45 && $absen >= 45)) {
    echo "nilai anda d" . PHP_EOL;
} else {
    echo "anda remidi" . PHP_EOL;
}
