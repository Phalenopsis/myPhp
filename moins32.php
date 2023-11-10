<?php

$str1 = 'Bonjour';
$str2 = 'bonjour';

echo strcmp($str1, $str2);

var_dump(function ($v, $k) {
    return $k == 'b' || $v == 4;
});

/* echo function ($v, $k) {
    return $k == 'b' || $v == 4;
}; */

echo gettype(function ($v, $k) {
    return $k == 'b' || $v == 4;
});

print_r((array)function ($v, $k) {
    return $k == 'b' || $v == 4;
});
