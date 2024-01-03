<?php

require 'classes/CompareFunctions.php';
require 'classes/MyPHP.php';
require 'classes/TestMyPHP.php';

use App\classes\TestMyPHP;

/* // name of original function
$functionTested = "array_key_exists";

// arrays where key is searched
$tab1 = [1, 2, 3, 4, 5, 6, 7];
$tab2 = ["pierre" => 15, "paul" => 17, "jacques" => 25];
$tabs = [$tab1, $tab2];

//keys i want search in arrays
$keys = ["1", 0, 25, "6", "pierre", "jean"];

//generate all tests
$tests = [];
foreach ($tabs as $tab) {
    foreach ($keys as $key) {
        $tests[] = [$key, $tab];
    }
}


$functionTested = "array_count_values";
$tabtest = [1, "hello", 1, "world", "hello"];
$tabtest2 = [1, "1", 0, ""];
$tests = [[$tabtest], [$tab1], [$tab2], [$tabtest2]]; // 

//do test
new TestMyPHP($functionTested, $tests); */

/*
$functionTested = "min";
$tab = [0, 25, 23, 45, 12, 7, 22];
$tab2 = [-1, -5, -25, -71];
$tab3 = ['resul2021' => 25, 'resul2022' => 32, 'resul2023' => 19];
$tab4 = ["6ab c", "9ab c", "10ab c",  "75bf rt", "cpo m", "do ps", "et er", "fp otr", 1];
$tab5 = [99, 1, 2, 3, 4];
$tests = [[$tab], [$tab2], [$tab3], [$tab4], $tab2, $tab4, $tab5];
new TestMyPHP($functionTested, $tests);
*/

/* $function = 'array_diff';

$array1 = [1, 2, 3, 4];
$array2 = [1, 2, 3, 4, 5];
$array3 = [7, 8];

$tab1 = array("a" => "green", "red", "blue", "red");
$tab2 = array("b" => "green", "yellow", "red");

$tests = [[$array1, $array2, $array3], [$array3, $array2, $array1], [$tab1, $tab2], [$tab2, $tab1]]; */

/*
$function = "strcmp";

$test1 = ['Bonjour', 'Bonjour'];
$test2 = ['Bonjour', 'bonjour'];
$test3 = ['Bonjour', 'Bonjour1'];
$test4 = ['Bonjour1', 'Bonjour'];
$test5 = ['aaaa', 'zzz'];
$test6 = ['zzz', 'aaaa'];
*/
/* 
$function = 'array_is_list';
$function = 'array_flip';

$tab = [0, 2, 4, [8]];
$tab1 = [0, 2, 4, 8, '4' => 10];
$tab2 = ['test' => 8, 5, 7];
$tab3 = [false => 'test', '1' => 'ultime', 2];
$tab4 = [-1 => 7, 1, 8, 9];
$tab5 = [-1 => 7, 0 => 1, 1 => 8, 2 => 9];
$tab6 = [0, 2, '3' => 4, 6, 8];
$tab7 = ['0' => 1, '1' => 2, '2' => 4, '3' => 3];
$tab8 = [1, 2, true, 4, 5, 6, 7, 1, 11, 12.3, 13, 14, 15, 16];


$tests = [[$tab], [$tab1], [$tab2], [$tab3], [$tab4], [$tab5], [$tab6], [$tab7], [$tab8]];
new TestMyPHP($function, $tests); */

//var_dump(3 === '3');

//var_dump(array_is_list($tab7));

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

$even = 'even';
$odd = 'odd';

$function = 'array_filter';
$array1 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$array2 = [6, 7, 8, 9, 10, 11, 12];

$entry = [
    0 => 'foo',
    1 => false,
    2 => -1,
    3 => null,
    4 => '',
    5 => '0',
    6 => 0,
];

$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];

/* var_dump(array_filter($arr, function ($k) {
    return $k == 'b';
}, ARRAY_FILTER_USE_KEY));

var_dump(array_filter($arr, function ($v, $k) {
    return $k == 'b' || $v == 4;
}, ARRAY_FILTER_USE_BOTH)); */

/* function testfunc1($k)
{
    return $k == 'b';
};
$testfunc1 = 'testfunc1';
function testfunc2($v, $k)
{
    return $k == 'b' || $v == 4;
};
$testfunc2 = 'testfunc2';

$tests = [
    [$array1, $even], [$array2, $even], [$array1, $odd], [$array2, $odd], [$entry],
    [$arr, $testfunc1, ARRAY_FILTER_USE_KEY],
    [$arr, $testfunc2, ARRAY_FILTER_USE_BOTH],
    [$arr, function ($k) {
        return $k == 'b';
    }, ARRAY_FILTER_USE_KEY]
];
new TestMyPHP($function, $tests); */

$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

/* $key = array_search('green', $array); // $key = 2;
$key = array_search('red', $array);   // $key = 1; */


//new TestMyPHP('array_search', $tests);

$array2 = ["php", 4.0, array("green", "red")];

$tests = [
    [$array],
    [$array2],
    [$array2, true],
    [[1, 2, 3, 4, 5]]
];
//new TestMyPHP('array_reverse', $tests);

/* 
$my_php = new MyPHP();
var_dump($my_php->my_array_search('green', $array)); */


/* $function = 'array_fill_keys';

$keys = array('foo', 5, 10, 'bar');

$tests = [
    [$keys, 'banana']
];

new TestMyPHP($function, $tests); */


$function = 'implode';

$array = ['je', 'suis', 'heureux', 'à', 'la', 'wild'];
$sep = ' ';

$tests = [
    [$sep, $array]
];


$function = 'str_starts_with';

$haystack = 'The lazy dog. The nice cat';
$needle = 'The';
$needle2 = 'Tne';

$tests = [
    [$haystack, $needle],
    [$haystack, $needle2],
    ['Ceci est un test', 'est'],
    ['Ceci eest un test', 'est']
];



$function = 'substr_count';


new TestMyPHP($function, $tests);
