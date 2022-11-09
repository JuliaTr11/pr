<?php

    $word = 'julius';
    $key = 3;
  for ($i = 0; $i = strlen($word); $i++){
      $sum = ord($word[$i]) + $key;
      if ($sum >255) {
          $sum = $sum - 255;
      } $codeWord = $codeWord.chr($sum);
  }



