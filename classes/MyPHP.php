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

    public function  my_array_fill_keys(array $keys, mixed $value): array
    {
        $return = [];

        foreach ($keys as $key) {
            $return[$key] = $value;
        }

        return $return;
    }

    public function my_implode(string $separator, array $array): string
    {
        $result = $array[0];
        for ($i = 1; $i < count($array); $i++) {
            $result .= $separator . $array[$i];
        }
        return $result;
    }

    public function my_str_starts_with(string $haystack, string $needle): bool
    {
        $lenNeedle = strlen($needle);
        if ($lenNeedle > strlen($haystack)) {
            return false;
        }
        // for ($i = 0; $i < $lenNeedle; $i++) {
        //     if ($needle[$i] !== $haystack[$i]) {
        //         return false;
        //     }
        // }
        // return true;

        for ($i = 0; $i < $lenNeedle && $haystack[$i] === $needle[$i]; $i++);
        return $i === $lenNeedle;
    }

    private function my_str_compare(string $haystackLetter, string $needleLetter): bool
    {
        if ($haystackLetter === $needleLetter) {
            return true;
        }

        return false;
    }

    public function my_str_contains(string $haystack, string $needle): bool
    {
        if ($needle === '') {
            return true;
        }
        for ($searchInHaystack = 0; $searchInHaystack < strlen($haystack) - strlen($needle) + 1; $searchInHaystack += 1) {

            for ($searchInNeedle = 0; $searchInNeedle < strlen($needle); $searchInNeedle += 1) {
                if ($this->my_str_compare($haystack[$searchInHaystack + $searchInNeedle], $needle[$searchInNeedle])) {
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

    private function my_substr(string $haystack, int $offset, ?int $length = null): string
    {
        $result = '';
        if ($length === null) {
            $limit = strlen($haystack);
        } else {
            $limit = $offset + $length;
        }
        for ($i = $offset; $i < $limit; $i += 1) {
            $result .= $haystack[$i];
        }
        return $result;
    }

    /**
     * return index of needle in haystack
     *
     * @param string $haystack
     * @param string $needle
     * @return integer
     */
    private function my_str_find(string $haystack, string $needle): int
    {
        if ($needle === '') {
            return true;
        }
        for ($searchInHaystack = 0; $searchInHaystack < strlen($haystack) - strlen($needle) + 1; $searchInHaystack += 1) {

            for ($searchInNeedle = 0; $searchInNeedle < strlen($needle); $searchInNeedle += 1) {
                if ($this->my_str_compare($haystack[$searchInHaystack + $searchInNeedle], $needle[$searchInNeedle])) {
                    if ($searchInNeedle === strlen($needle) - 1) {

                        return $searchInHaystack;
                    }
                    //ne fait rien
                } else {
                    break;
                }
            }
        }

        return -1;
    }

    public function my_substr_count(
        string $haystack,
        string $needle,
        int $offset = 0,
        ?int $length = null
    ): int {
        $haystackLength = strlen($haystack);



        if ($length !== null) {
            if (abs($offset) + abs($length) > $haystackLength) {
                // Uncaught ValueError
            }
            if ($offset >= 0 && $length > 0) {
                $haystack = $this->my_substr($haystack, $offset, $length);
            } elseif ($offset > 0 && $length < 0) {
                $haystack = $this->my_substr($haystack, $offset, $haystackLength - $offset + $length);
            } elseif ($offset < 0 && $length > 0) {
                $haystack = $this->my_substr($haystack, $haystackLength + $offset, $length);
            } elseif ($offset < 0 && $length < 0) {
                $haystack = $this->my_substr($haystack, $haystackLength + $offset, $haystackLength - ($haystackLength + $offset) + $length);
            } else {
                return 0;
            }
        }

        // $haystack_len = isset($length) ? $offset + $length : strlen($haystack);

        // $occur = 0;
        // $haystack_len = strlen($haystack);
        // $needle_len = strlen($needle);
        // for ($i = $offset; $i < $haystack_len; $i++) {
        //     for ($y = 0; $y < $needle_len &&
        //         $i + $y < $haystack_len &&
        //         $haystack[$i + $y] === $needle[$y]; $y++) {
        //         if ($y === $needle_len - 1) {
        //             $occur += 1;
        //         }
        //     }
        // }
        // return $occur;

        $nbOccurrences = 0;
        $continue = true;
        while ($continue) {
            $isFind = $this->my_str_find($haystack, $needle);
            if ($isFind != -1) {
                $nbOccurrences += 1;
                $offset = $isFind + strlen($needle);
                $haystack = $this->my_substr($haystack, $offset);
            } else {
                $continue = false;
            }
        }
        return $nbOccurrences;
    }

    public function my_str_pad(
        string $string,
        int $length,
        string $pad_string = " ",
        int $pad_type = STR_PAD_RIGHT
    ): string {

        $initialLength = strlen($string);
        if ($length < $initialLength) {
            return $string;
        }

        $padLeft = '';
        $padRight = '';
        $padLen = strlen($pad_string);

        if ($pad_type === STR_PAD_RIGHT) {
            for ($i = 0; $i < $length - $initialLength; $i++) {
                $padRight .= $pad_string[($i % $padLen)];
            }
        } elseif ($pad_type === STR_PAD_LEFT) {
            for ($i = 0; $i < $length - $initialLength; $i++) {
                $padLeft .= $pad_string[($i % $padLen)];
            }
        } elseif ($pad_type === STR_PAD_BOTH) {
            for ($i = 0; $i < ceil(($length - $initialLength) / 2); $i++) {
                $padRight .= $pad_string[($i % $padLen)];
            }
            for ($i = 0; $i < floor(($length - $initialLength) / 2); $i++) {
                $padLeft .= $pad_string[($i % $padLen)];
            }
        }

        return $padLeft . $string . $padRight;
    }

    public function my_str_split(string $string, int $length = 1): array
    {
        $len = strlen($string);
        $arr = [];
        for ($i = 0; $i < $len; $i += $length) {
            $s = '';
            for ($j = $i; $j < min([$i + $length, $len]); $j += 1) {
                $s .= $string[$j];
            }
            $arr[] = $s;
        }
        return $arr;
    }
}
