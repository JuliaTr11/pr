<?php
$list = [
    'a' => 'word a',
    'b' => 'word b',
    'c' => 'word c',
    'd' => 'word b',
    'e' => 'word e',
];
$list2 = array_flip($list);

$keys = array_values($list2);
//var_dump($list2);

$keys1 = array_merge($keys, ['!'] );
//var_dump($keys1);

$result = array_combine($keys1, array_values($list));

$end = $result;
echo json_encode($result);




