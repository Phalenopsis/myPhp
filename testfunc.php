<?php
/* 
function my_array_diff(array $array, array ...$arrays): array
{
    $filters = [];
    foreach ($arrays as $filter) {
        $filters = array_merge($filters, $filter);
    }
    $result = [];
    foreach ($array as $key => $elt) {
        if (!in_array($elt, $filters)) {
            $result[$key] = $elt;
            echo $key . '=>' . $elt . PHP_EOL;
        }
    }
    return $result;
}

$array1 = [1, 2, 3, 4, 7];
$array2 = [1, 2, 3, 4, 5];
$array3 = [1, 2, 4, 5, 6];

$result1 = array_diff($array1, $array2, $array3);
$result2 = array_diff($array2, $array1, $array3);

$myResult1 = my_array_diff($array1, $array2, $array3);
$myResult2 = my_array_diff($array2, $array1, $array3);


echo "test1" . PHP_EOL;
var_dump($result1);
var_dump($myResult1);
echo "test2" . PHP_EOL;
var_dump($result2);
var_dump($myResult2);
 */

function compare($a, $b)
{
    if ($a > $b) {
        return 1;
    } elseif ($a === $b) {
        return 0;
    } else {
        return -1;
    }
}

function my_strcmp($string1, $string2)
{
    $len1 = strlen($string1);
    $len2 = strlen($string2);
    $return = compare($len1, $len2);
    $charCompare = 0;

    for ($i = 0; $i < (min($len1, $len2)); $i += 1) {
        $charCompare = compare($string1[$i], $string2[$i]);
        if ($charCompare !== 0) {
            return $charCompare;
        }
    }
    return $return;
}

$var1 = "B";
$var2 = "C";

echo strcmp($var1, $var2);

echo PHP_EOL;

if ($var1 > $var2) {
    echo 1;
} elseif ($var1 === $var2) {
    echo 0;
} else {
    echo -1;
}
