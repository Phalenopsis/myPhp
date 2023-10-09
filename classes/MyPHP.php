<?php

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
}