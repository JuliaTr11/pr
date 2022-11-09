<?php
$list = [
    'a' => 'word a',
    'b' => 'word b',
    'c' => 'word c',
    'd' => 'word b',
    'e' => 'word e',
];
$list1 = sizeof($list);
var_dump($list1);

$list2 = array_flip($list);
var_dump($list2);

$list3 = sizeof($list2);
var_dump($list3);

echo $list1 != $list3;
