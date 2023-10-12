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


$functionTested = "min";
$tab = [0, 25, 23, 45, 12, 7, 22];
$tab2 = [-1, -5, -25, -71];
$tab3 = ['resul2021' => 25, 'resul2022' => 32, 'resul2023' => 19];
$tab4 = ["6ab c", "9ab c", "10ab c",  "75bf rt", "cpo m", "do ps", "et er", "fp otr", 1];
$tab5 = [99, 1, 2, 3, 4];
$tests = [[$tab], [$tab2], [$tab3], [$tab4], $tab2, $tab4, $tab5];
new TestMyPHP($functionTested, $tests);
