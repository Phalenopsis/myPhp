<?php
require_once "classes/Test.php";


// name of original function
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

// do test
new TestMyPHP($functionTested, $tests);
