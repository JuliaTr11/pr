<?php

/*
echo date("r");

$x = 10;
$y = 20;
var_dump($x > $y);
var_dump($x< $y);
var_dump($x == $y);

$y = 10;
var_dump($x >= $y);
var_dump($x < $y);
var_dump($x != $y);
*/

//$a = 2+3;
//var_dump($a);

/*$x = 2;
$y = 3;

$a = $x + $y;
var_dump($a);

$b = $x - $y;
var_dump($b);

$c = $x * $y;
var_dump($c);

$d = $x / $y;
var_dump($d);

$e = 15;
$f = 7;
$g = $e % $f;
var_dump($g);
*/

/*$a = 3;
$b = 2;

$a++;
--$b;
var_dump($a);
var_dump($b);
*/

/*$a = 4;
$b = 2;
$c = $a + $b--;
var_dump($c);
var_dump($b);

$a = 4;
$b = 2;
$c = $a - ++$b;
var_dump($c);
var_dump($b);*/

//$a = true;
//$b = FALSE;

/*$a = 2;
$b = 3;
$c = $a == $b;
var_dump($c);*/

/*$a = 2;
$b = 3;
$c = 0;

if ($a > $b) {
    $c = 1;
} elseif ($a == $b) {
    $c = 3;
}

var_dump($c); */

/*$a = 2;
if ($a > 10) {
    $b = 1;
} else {
    $b = 0;
}
var_dump($b);

$c = $a > 10 ? 2 : ($a > 5 ? 3 : 4);
var_dump($c);*/

/*$a = null;

if ($a == null) {
    $b = 2;
} else {
    $b = $a;
}
var_dump($b);

$c = null;
$d = $a ?? $c ?? 22;
var_dump($d);

$a = false;
$b = true;

if ($a == true && $b == true) {
    $c = 1;
} else {
    $c = 0;
}
var_dump($c);

if ($a || $b) {
    $d = 1;
} else {
    $d = 0;
}
var_dump($d);

$c = $a && $b ? $c = 1 : 0;
var_dump($c);

$d = $a || $b ? $d = 1 : 0;
var_dump($d);

$a = false;
$b = false;
$c = true;
$d = $a || !($b && $c) ? 1 : 0;
var_dump($d);


$a = 3;

if ($a == 1) {
    $b = 10;
} elseif ($a == 2) {
    $b = 20;
} elseif ($a == 3) {
    $b = 30;
} else {
    $b = -10;
}
var_dump($b);

$c = 4;

switch ($a + 1) {
    case 3:
        $d = 0;
        break;

    case $c:
        $d = 1;
        break;
}
var_dump($d);

$str1 = 'Привет, мир ';
echo $str1;

$str2 = 'Хочу сказать \' Привет мир!\'.....';
echo $str2;

$str3 = 'Символ \ называется "обратный слеш"';
echo $str3;

$str4 = 'Привет мир!\r А эта часть уже на новой строке ?/t- Нет';
echo $str4;
$str1 = "Привет, \"мир\"!";
echo $str1;

$str2 = "\nКак дела? \t - Хорошо!";
echo $str2;

$a = 25;
$str3 = "\nМне $a лет!";
echo $str3;

$str = <<<EOD
Привет мир,\n
Как дела? "Хорошо"
строка через here\doc-синтаксис
EOD;
echo $str;

$str1 = 'hello';
$str2 = "world";
$str3 = $str1 . $str2;
echo $str3;

$str4 = 'hello';
$str4 .='world';
echo $str4;


$str = 'hello';
var_dump($str);
$str2 = 'привет';
var_dump($str2);
$length = mb_strlen($str2);
var_dump($length);


$str = 'hello';
$e  = $str [1];
echo $e;
$letter0 = $str[strlen($str)-1];
echo $letter0;

$str[1] = 'E';
echo $str;

$str = 'Hello world';
$world1 = substr($str,0,5);
//echo $world1;

$part = substr($str, 4);
//echo $part;

$part2 = substr($str,-5);
//echo $part2;

$part3 = substr($str,6,-3);
echo $part3;


$str = 'Hello world';
$index = strpos($str,'Hello');
var_dump($index);

$str = 'abc abc';
$index = strpos($str,'abc', 2);
var_dump($index);


$str = 'abc abc';
$index = stripos($str, 'ABC');
var_dump($index);


$str = 'Hello world';
$str2 = str_replace('Hello', 'Hi',$str);
var_dump($str2);
echo $str2;

$str = 'abc abc';
$str2 = str_replace('abc','123',$str,$count);
echo $str2;
var_dump($count);

$str = 'Hello world';
$str2 = strtolower($str);
echo $str2;

$str3 =strtoupper($str);
echo $str3;


$srt = '  hello  ';
$srt2 = trim($srt);
//echo $srt2;

$srt3 = rtrim($srt2);
//echo $srt;

$srt4 = "\n\nhello";
//echo $srt4;

$srt5 = ltrim($srt4);
echo $srt5;
                      Массивы

$list[0] = 'Овощи';
$list[1] = 'Фрукты';
$list[2] = 'Ягоды';

//echo $list[1];

$list2[] = 'a';
$list2[] = 'b';
$list2[] = 'c';

echo $list2[1];


$list['vegetables'] = 'Овощи';
$list['fruits'] = 'Фрукты';
$list['berries'] = 'Ягоды';

echo $list['fruits'];
*/

/*$list = [1,3,5,7];
//echo $list[2];

$list2 = ['vegetables' => 'Овощи', 'fruits' => 'Фрукты','berries' => 'Ягоды',];
//echo $list2['fruits'];

$a = sizeof($list);
var_dump($a);

$b = count($list2);
var_dump($b);
*/
/*
$str = 'Hello world';
$list = explode(' ', $str);
//var_dump($list);

$list2 = explode('!',$str);
//var_dump($list2);

$list3 = [1, 3, 5, 7, ];
$str = implode(' -!-', $list3);
echo $str;
var_dump($str);
*/
                             // Многомерные массивы
/*
$list1 = [1, 2, 3];
$list2 =[4, 5, 6];

$list = [
    's1' => $list1,
    's2' => $list2,
    's3' => [7, 8, 9],
];

//var_dump($list['s3']);

var_dump($list['s3'][0]);

$cities = [
    'russia' => [
        'msk' => 'Москва',
        'spb' => 'Санкт-Питербург'
    ],
     'germany' => [
         'Berlin',
         'Munchen',
         ],
     ];

var_dump($cities['russia']['spb']);


$list = [
    'a' => 'word a',
    'b' => 'word b',
    'c' => 'word c',
];

$list1 = array_keys($list);
//var_dump($list1);

$list2 = array_values($list);
var_dump($list2);
*/
/*
$list1 = [
    'a' => 'word a',
    'b' => 'word b',
];
$list2 = [
    'c' => 'word c',
    'd' => 'word d',
    'a' => 'word a2',
];
$list = array_merge($list1, $list2);
var_dump($list);
*/

//$list1 = ['a', 'b', 'c'];
//$list2 =['d', 'e', 'a'];

//$list = array_merge($list1, $list2);
//var_dump($list);

/*$list1 = [
    'a' => 'word a',
    'word b',
];

$list2 = [
    'c' => 'word c',
    'a' => 'word a2',
    'word d',
];
$list = array_merge($list1, $list2);
var_dump($list);
*/
/*
$keys = ['a', 'b',];
$values = ['word a', 'word b'];
$list = array_combine($keys, $values);
var_dump($list);
*/
/*
$list = [
    'a' => 'word a',
    'b' => 'word b',
    'c' =>'word a',
];
$list2 = array_flip($list);
var_dump($list2);
*/
/*
$list = ['a', 'b', 'c', 'd'];
$list2 = array_reverse($list);
var_dump($list2);

$list = [
    'a' => 'word a',
    'b' => 'word b',
    'c' =>'word c',
];

$list2 = array_reverse($list);
var_dump($list2);
*/
/*$list = ['a', 'b', 'c', 'd'];
$list2 = array_reverse($list);
//var_dump($list2);
$list3 = array_reverse($list,true);
var_dump($list3);*/

//$list =['a', 'b', 'c', 'd'];
//$hasLetter = in_array('e', $list);
//$hasLetter = array_search('d',$list);
//var_dump($hasLetter);
/*
$list = [
    'a' => 'word a',
    'b' => 'word b',
];
$indexWord = array_search('word c', $list);
var_dump($indexWord);
*/


