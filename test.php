<?php
/*
$testResults = [10, 34 , 50, 70, 90, 20 ];

$candidatesNum = count($testResults);

for ($i = 0; $i < $candidatesNum; $i++) {
    if ($testResults [$i] >70) {
        echo "Кандидат с номером {$i} набрал набрал более 70 баллов\n";
    }
}
*/
/*
    $testResults = ['Иванов' => 40,'Петрович' => 50,'Динисыч' => 90, 'Валилич' => 100,'Михалыч' => 60,];
    foreach ($testResults as $key => $testResult) {
        if ($testResult > 70){
            echo " Кандидат с именем {$key} набрал более 70 баллов\n";

        }
    }
*/
/*
    $testArray = [1, 2, 3];

        foreach ($testArray as &$value){
            $value = 0;
        }
        print_r($testArray);
*/
/*
    while (false){
        echo "Я цикл while";
    }
    do{
        echo "Я цикл do....while";
    } while (false);
    */
/*
    stream_set_blocking(STDIN,false);
    do {
        echo rand(10000,99999);
        $key = ord(fgetc(STDIN));
    } while ($key != 10);
*/
  /*  $testStr = 'abracadabra';

    $exampleStrLen = strlen($testStr);
    for ($i = 0; $i < $exampleStrLen; $i++){
        if ($testStr[$i] === 'b') {
            $position = $i;
            break;
        }
    }
    echo $position +1;
  */

    $numbers = [5, 10, 20, 4, 3, 1, 74];
    $sum = 0;

    foreach ($numbers as $number) {
        if ($number % 5 !== 0) {
            continue;
        }
        $sum += $number;

    }
    echo $sum;