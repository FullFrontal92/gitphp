<?php

$students = [
    "Emmanuel"  => 42,
    "Thierry"   => 51,
    "Pascal"    => 45,
    "Eric"      => 48,
    "Nicolas"   => 19
];


foreach ($students as $etu => $age) {
    echo $etu . $age . "<br/>";
}


$age = array(42,51,45,48,19);
echo array_sum($age). "<br/>" ;

echo array_sum($age) / count($students);

?>