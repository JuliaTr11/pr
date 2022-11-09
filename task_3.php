<?php

$list = [
    'a' => 'word a',
    'b' => 'word b',
    'c' => 'word c',
];

$list1 = array_keys($list);
//var_dump($list1);

$list2 = implode(' ', $list1);
echo $list2;