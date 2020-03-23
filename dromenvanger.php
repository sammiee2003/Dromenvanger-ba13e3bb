<?php

echo "van hoeveel vrienden wil je hun droom?";
$aantalvrienden = readline("");
$array = array();

for ($i = 1; $i <= $aantalvrienden; $i++) {
    echo "wat is je naam?";
    $namen = readline("");

    echo "hoeveel dromen wil je opgeven?";
    $hoeveel = readline("");

    for ($j = 0; $j < $hoeveel; $j++){
        echo "wat is jou droom?";
        $droom[$namen][] = readline("");
    }
}

foreach ($droom as $value => $a){
    echo $value . " heeft dit als droom:". PHP_EOL;
    foreach ($a as $dromen){
        echo $dromen . PHP_EOL;
    }
}