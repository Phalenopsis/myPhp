<?php

namespace App\classes;

class CompareFunction
{
    private object $whichFunctions;

    public function __construct($whichFunctions)
    {
        $this->whichFunctions = $whichFunctions;
    }

    /**
     * Compare resutl1 and result2
     *
     * @param mixed $result1
     * @param mixed $result2
     * @return void
     */
    private function test_function(mixed $result1, mixed $result2): bool
    {
        if ($result1 === $result2) {
            return true;
        } else {
            return false;
        }
    }


    /**
     * compare the result of 2 functions
     *
     * @param string $func1 first function's name
     * @param string $func2 second function's name
     * @param mixed ...$args all arguments this functions take
     * @return boolean|array return true if result are same, else return an associative array on the model :  
     * ["functions" => [$func1 => $result1, $func2 => $result2], "arguments" => $args]
     */
    public function compareFunctions(string $func1, string $func2, mixed ...$args): bool|array
    {
        $result1 = $this->whichFunctions->$func1(...$args);
        $result2 = $func2(...$args);
        if ($this->test_function($result1, $result2)) {
            return true;
        }
        return ["functions" => [$func1 => $result1, $func2 => $result2], "arguments" => $args];
    }
}
