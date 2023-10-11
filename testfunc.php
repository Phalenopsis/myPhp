<?php

$str1 = "b";

echo ord($str1); //98

echo PHP_EOL;

$str2 = "t";

echo ord($str2); //116

echo PHP_EOL;

echo ord($str1) - ord($str2); //-18

$str1 = "bear";

$str2 = "tear";

$str3 = "";

echo "<pre>";

echo strcmp($str1, $str2); // -18

echo PHP_EOL;

echo strcmp($str2, $str1); //18

echo PHP_EOL;

echo strcmp($str2, $str2); //0

echo PHP_EOL;

echo strcmp($str2, $str3); //4

echo PHP_EOL;

echo strcmp($str3, $str2); //-4

echo PHP_EOL;

echo strcmp($str3, $str3); // 0

echo "</pre>";
