<?php

echo "Ivesti skaiciai";
echo "<pre>";
print_r($_POST);
echo "</pre>";

function addTwoNumber($skaicius,$skaicius2){
    $sum = $skaicius + $skaicius2;
    return $sum;
}
echo "Suma = " . addTwoNumber($_POST['skaicius'],$_POST['skaicius2'] );

echo '</br>';

function addAvg ($skaicius,$skaicius2) {
    $sum = $skaicius + $skaicius2;
    $avg = $sum/2;
    return $avg;
}
echo "Vidurkis = " . addAVG($_POST['skaicius'],$_POST['skaicius2'] );

echo '</br>';

function addSandauga ($skaicius,$skaicius2) {
    $sandauga = $skaicius * $skaicius2;
    return $sandauga;
}
echo "Sandauga = " . addSandauga($_POST['skaicius'],$_POST['skaicius2'] );

echo '<br>';

function addFakto ($skaicius,$skaicius2) {
    $num = $skaicius + $skaicius2;
    for ($i = 1; $i <= $num; $i++) {
    $factorial = $num * $i;
    }
    return $factorial;
}
echo "dvieju skaiciu sumos faktorialas = " . addFakto($_POST['skaicius'],$_POST['skaicius2'] );

echo '<br>';
