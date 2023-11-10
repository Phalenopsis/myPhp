<?php

namespace App\classes;

/**
 * Try to redo some php functions
 */
class MyPHP
{
    /**
     * try to redo php in_array function
     * search if a value is in an array
     *
     * @param mixed $value value searched
     * @param array $array array in wich we search
     * @param boolean $strict if enabled, search will be strict (value AND type)
     * @return boolean
     */
    public function my_in_array(mixed $value, array $array, bool $strict = false): bool
    {
        for ($i = 0; $i < count($array); $i++) {
            if ($strict) {
                if ($array[$i] === $value) {
                    return true;
                }
            } else {
                if ($array[$i] == $value) {
                    return true;
                }
            }
        }
        return false;
    }

    /**
     * try to redo php array_key_exists function
     * search if a key is in an array
     * I discover when doing it is a loose comparison
     *
     * @param string|integer $key key searched
     * @param array $array array in wich we search
     * @return boolean
     */
    public function my_array_key_exists(string|int $key, array $array): bool
    {
        foreach ($array as $arrayKey => $arrayValue) {
            if ($arrayKey == $key) {
                return true;
            }
        }
        return false;
    }

    /**
     * Counts the occurrences of each distinct value in an array
     *
     * @param array $array
     * @return array
     */
    public function my_array_count_values(array $array): array
    {
        $tabReturn = [];
        foreach ($array as $value) {

            if (gettype($value) === "string" || gettype($value === "int")) {
                array_key_exists($value, $tabReturn) ? $tabReturn[$value] += 1 : $tabReturn[$value] = 1;
            } else {
                //raise error E_WARNING 
            }
        }
        return $tabReturn;
    }

    public function my_max(mixed $value,  mixed ...$values): mixed
    {
        if (gettype($value) === "array") {
            $searchArr = $value;
        } else {
            $searchArr = [$value, ...$values];
        }

        $max = null;
        foreach ($searchArr as $val) {
            if ($max === null) {
                $max = $val;
            } elseif ($val > $max) {
                $max = $val;
            }
        }
        return $max;
    }
    public function my_min(mixed $value,  mixed ...$values): mixed
    {
        if (gettype($value) === "array") {
            $searchArr = $value;
        } else {
            $searchArr = [$value, ...$values];
        }

        $min = null;
        foreach ($searchArr as $val) {
            if ($min === null) {
                $min = $val;
            } elseif ($val < $min) {
                $min = $val;
            }
        }
        return $min;
    }

    public function my_array_diff(array $array, array ...$arrays): array
    {
        $filters = [];
        foreach ($arrays as $filter) {
            $filters = array_merge($filters, $filter);
        }
        $result = [];
        foreach ($array as $key => $elt) {
            if (!in_array($elt, $filters)) {
                $result[$key] = $elt;
            }
        }
        return $result;
    }

    public function my_compare($a, $b)
    {
        if ($a > $b) {
            return 1;
        } elseif ($a === $b) {
            return 0;
        } else {
            return -1;
        }
    }

    public function my_strcmp($string1, $string2): int
    {

        $charCompare = 0;

        $i = 0;
        while (isset($string1[$i]) && isset($string2[$i])) {
            $charCompare = $this->my_compare($string1[$i], $string2[$i]);
            if ($charCompare !== 0) {
                return $charCompare;
            }
            $i += 1;
        }

        $len1 = strlen($string1);
        $len2 = strlen($string2);
        $return = $this->my_compare($len1, $len2);

        return $return;
    }

    public function my_array_is_list(array $array): bool
    {
        $i = 0;
        /* while (isset($array[$i])) {
            $i += 1;
        }
        if ($i === count($array)) {
            return true;
        } */
        foreach ($array as $key => $_) {
            if ($key === $i) {
                $i += 1;
            } else {
                return false;
            }
        }
        return true;
    }

    public function my_array_flip(array $array): array
    {
        $return = [];
        foreach ($array as $key => $value) {
            if (gettype($value) === 'string' || gettype($value) === 'integer') {
                $return[$value] = $key;
            } else {
                // lancer warning
            }
        }
        return $return;
    }

    public function my_array_filter(array $array, ?callable $callback = null, int $mode = 0): array
    {
        $result = [];
        foreach ($array as $key => $value) {
            if ($callback === null) {
                if ($value) {
                    $result[$key] = $value;
                }
            } elseif ($mode === ARRAY_FILTER_USE_KEY) {
                if ($callback($key)) {
                    $result[$key] = $value;
                }
            } elseif ($mode === ARRAY_FILTER_USE_BOTH) {
                if ($callback($value, $key)) {
                    $result[$value] = $value;
                }
            } else {
                if ($callback($value)) {
                    $result[$key] = $value;
                }
            }
        }

        return $result;
    }

    public function my_array_search(mixed $needle, array $haystack, bool $strict = false): int|string|false
    {
        foreach ($haystack as $key => $value) {
            if ($strict) {
                if ($value === $needle) {
                    return $key;
                }
            } else {
                if ($value == $needle) {
                    return $key;
                }
            }
        }
        return false;
    }

    public function my_array_reverse(array $array, bool $preserve_keys = false): array
    {
        $result = [];
        for ($i = count($array) - 1; $i >= 0; $i -= 1) {
            $key = array_keys($array)[$i];
            if ($preserve_keys) {
                $result[$key] = $array[$key];
            } else {
                if (is_numeric($key)) {
                    $result[] = $array[$key];
                } else {
                    $result[$key] = $array[$key];
                }
            }
        }

        return $result;
    }
}
