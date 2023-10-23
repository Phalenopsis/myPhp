<?php
require_once "classes/TestMyPHP.php";
require_once "classes/MyPHP.php";

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
new TestMyPHP($function, $tests);

//var_dump(3 === '3');

//var_dump(array_is_list($tab7));
