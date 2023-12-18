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
/* 
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
 */
/* $tab = [0, 2, 4, 8];
$tab2 = ['test' => 8, 5, 7];
$tab3 = [false => 'test', '1' => 'ultime', 2];
$tab4 = [-1 => 7, 1, 8, 9];
$tab5 = [-1 => 7, 0 => 1, 1 => 8, 2 => 9];
$tab6 = [0, 2, '3' => 4, 6, 8];



function my_array_is_list(array $array): bool
{
    $i = 0;
    while (isset($array[$i])) {
        $i += 1;
    }
    if ($i === count($array)) {
        return true;
    }
    return false;
}

var_dump(array_is_list($tab));
var_dump(my_array_is_list($tab));
echo PHP_EOL;

var_dump(array_is_list($tab2));
var_dump(my_array_is_list($tab2));

echo PHP_EOL;

var_dump(array_is_list($tab3));
var_dump(my_array_is_list($tab3));


echo PHP_EOL;

var_dump(array_is_list($tab4));
var_dump(my_array_is_list($tab4));
echo PHP_EOL;

var_dump(array_is_list($tab5));
var_dump(my_array_is_list($tab5));
//var_dump('2' + 1 == '3');

var_dump($tab5); */
/* 
$tab = [true => 0, '2' => 'toto', 'tata' => '25', '123a' => 'osef'];

foreach ($tab as $key => $_) {
    var_dump($key);
} */

/* var_dump(is_numeric('123a'));
var_dump(is_numeric('4'));

var_dump(intval('123a')); */

//var_dump(array_is_list(['0' => 1]));

$tab = ['4' => 25, '7' => 78];

/* foreach ($tab as $key => $value) {
    if ($key === '4') {
        echo 'la clé === "4"' . PHP_EOL;
    } else {
        echo 'ça marche pas' . PHP_EOL;
    }
}
 */

//var_dump(array_flip($tab));

/* $tab2 = [1, 2, 3, 4, 5, 6, 7, 1, 11, 12, 13, 14, 15, 16];
var_dump(array_flip($tab2)); */
function odd($var)
{
    // retourne si l'entier en entrée est impair
    return $var & 1;
}

function even($var)
{
    // retourne si l'entier en entrée est pair
    return !($var & 1);
}

$array1 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$array2 = [6, 7, 8, 9, 10, 11, 12];

/* echo "Impair :\n";
print_r(array_filter($array1, "odd"));
echo "Pair :\n";
print_r(array_filter($array2, "even")); */
/* 
function my_array_filter(array $array, ?callable $callback = null, int $mode = 0): array
{
    $result = [];

    foreach ($array as $key => $value) {
        if ($mode === 'ARRAY_FILTER_USE_KEY') {
            if ($callback($key)) {
                $result[$key] = $value;
            }
        } elseif ($mode === 'ARRAY_FILTER_USE_BOTH') {
            if ($callback($key, $value)) {
                $result[$key] = $value;
            }
        } else {
            if ($callback($value)) {
                $result[$key] = $value;
            }
        }
    }

    return $result;
}

print_r(array_filter($array1, "even"));
print_r(my_array_filter($array1, "even"));
 */
/* 
function my_str_contains(string $haystack, string $needle): bool
{
    if ($needle === '') {
        return true;
    }
    for ($searchInHaystack = 0; $searchInHaystack < strlen($haystack) - strlen($needle) + 1; $searchInHaystack += 1) {

        for ($searchInNeedle = 0; $searchInNeedle < strlen($needle); $searchInNeedle += 1) {
            if (my_compare($haystack[$searchInHaystack + $searchInNeedle], $needle[$searchInNeedle])) {
                if ($searchInNeedle === strlen($needle) - 1) {

                    return true;
                }
                //ne fait rien
            } else {
                break;
            }
        }
    }

    return false;
}

function my_compare(string $haystackLetter, string $needleLetter): bool
{
    if ($haystackLetter === $needleLetter) {
        return true;
    }

    return false;
}


$haystack = 'the lazy fox';

$needle = 'lazy';

var_dump(my_str_contains($haystack, $needle));
 */


$array = ['name' => 'chat'];

/* function mergeArrays(?array ...$arrays): array
{
    $result = [];
    foreach ($arrays as $array) {
        if ($array !== null) {
            $result = array_merge($result, $array);
        }
    }
    return $result;
}

var_dump(mergeArrays($array, null));

$var1 = "array";
$var2 = 'result';

$$var2 = mergeArrays($$var1, null);
var_dump($result); */

/* function my_array_search(mixed $needle, array $haystack, bool $strict = false): int|string|false
{
    foreach ($haystack as $key => $value) {
        /* if ($strict) {
            if ($value === $needle) {
                return $key;
            }
        } else { 
        if ($value == $needle) {
            echo $value . " " . $needle;
            return $key;
        }
        //}
        return false;
    }
} */

// function my_array_reverse(array $array, bool $preserve_keys = true): array
// {
//     $result = [];
//     for ($i = count($array) - 1; $i >= 0; $i -= 1) {
//         $key = array_keys($array)[$i];
//         if ($preserve_keys) {
//             $result[$key] = $array[$key];
//         } else {
//             if (is_numeric($key)) {
//                 $result[] = $array[$key];
//             } else {
//                 $result[$key] = $array[$key];
//             }
//         }
//     }

//     return $result;
// }

// $array = [1, 'tres' => 2, 3, 4];

// var_dump("PHP", array_reverse($array, false));
// var_dump("MY", my_array_reverse($array, false));


function my_str_starts_with(string $haystack, string $needle): bool
{
    for ($i = 0; $i < strlen($needle); $i++) {
        if ($needle[$i] !== $haystack[$i]) {
            return false;
        }
    }
    return true;
}
