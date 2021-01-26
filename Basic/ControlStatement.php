<?php
/**
 * Created by PhpStorm.
 * User: izudin
 * Date: 1/21/21
 * Time: 9:49 AM
 */

$nilai = 10;
$absen = 90;

// for if else statement you can use elseif to replace else if
if ($nilai >= 80 and $absen >= 80) {
    echo "Nilai Anda A" . PHP_EOL;
} elseif ($nilai >= 70 and $absen >= 70) {
    echo "Nilai anda B" . PHP_EOL;
} elseif ($nilai >= 60 and $absen >= 60) {
    echo "Nilai anda C" . PHP_EOL;
} elseif ($nilai >= 50 and $absen >= 50) {
    echo "Nilai anda D" .PHP_EOL;
} else {
    echo "Nilai anda E" . PHP_EOL;
}

// this is another way to declare if else statement
// but for this form you can only use elseif
if ($nilai >= 80 and $absen >= 80):
    echo "Nilai anda A" . PHP_EOL;
elseif ($nilai >= 70 and $absen >= 70):
    echo "Nilai anda B" . PHP_EOL;
elseif ($nilai >= 60 and $absen >= 60):
    echo "Nilai anda C" . PHP_EOL;
elseif ($nilai >= 50 and $absen >= 50):
    echo "Nilai anda D" . PHP_EOL;
else:
    echo "Nilai anda E" . PHP_EOL;
endif;


// Switch
$nilaiSwitch = "A";

switch ($nilaiSwitch) {
    case "A":
        echo "Anda lulus dengan sangat baik ". PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda lulus". PHP_EOL;
        break;
    case "D":
        echo "Anda tidak lulus". PHP_EOL;
        break;
    default:
        echo "Mungkin anda salah jurusan" . PHP_EOL;
}

switch ($nilaiSwitch):
    case "A":
        echo "Anda lulus dengan sangat baik ". PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda lulus". PHP_EOL;
        break;
    case "D":
        echo "Anda tidak lulus".PHP_EOL;
        break;
    default:
        echo "Mungkin anda salah jurusan ". PHP_EOL;
endswitch;


// Ternary Operator
$gender = "WANITA";
$hi = $gender == "PRIA" ? "Hi, bro!" : "Hi, nona!";

echo "Greeting morning, $hi";
