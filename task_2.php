<?php

$a = 'Я люблю море. Я лечу на море. Я умею плавать в море. Какое чистое море! Хочу на море. Завтра поедем на море';
$b = 'море';
$a = str_replace('море', strrev($b), $a);
echo $a;

//$a = explode(' ',$a);
//var_dump($a);
//$a = array_count_values($a);
//var_dump($c);
//$a = array_values($a);
//var_dump($a);
//$a = implode($a);
//var_dump($a);
// Так определила что самое частое "море"