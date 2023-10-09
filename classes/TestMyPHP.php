<?php
require_once "MyPHP.php";
require_once "CompareFunctions.php";



class TestMyPHP
{

    private object $myPHP;
    private object $compareFunction;
    private string $originalFunction;
    private string $myFunction;
    private array $tests;


    public function __construct(string $function, array $tests)
    {
        $this->myPHP = new MyPHP();
        $this->compareFunction = new CompareFunction($this->myPHP);
        $this->originalFunction = $function;
        $this->myFunction = "my_" . $function;
        $this->tests = $tests;
        $this->doTests();
    }

    /**
     * lauch the test
     *
     * @return void
     */
    private function doTests(): void
    {
        foreach ($this->tests as $test) {
            $result = $this->compare($test);
            $this->displayResult($result, $test);
        }
    }

    /**
     * compare the original function and the handmade function
     *
     * @param array $test an array contains all arguments passed to the functions 
     * @return boolean|array return true if result are same, else return an associative array on the model :  
     * ["functions" => [$func1 => $result1, $func2 => $result2], "arguments" => $args]
     */
    private function compare(array $test): bool|array
    {
        $func1 = $this->myFunction;
        $func2 = $this->originalFunction;
        return $this->compareFunction->compareFunctions($func1, $func2, ...$test);
    }

    /**
     * display the test result in the CLI
     *
     * @param [type] $testResult
     * @return void
     */
    private function displayResult($testResult): void
    {
        if ($testResult === true) {
            echo "\033[32mSucces\033[0m" . PHP_EOL;
        } else {
            echo $this->createFailureMessage($testResult);
        }
    }

    /**
     * create the message if the results don't match
     *
     * @param array $testResult
     * @return string
     */
    private function createFailureMessage(array $testResult): string
    {
        $message = "";
        $message .= "\033[31m start Failure\033[0m" . PHP_EOL;
        $message .= "pour les arguments :" . PHP_EOL;
        foreach ($testResult["arguments"] as $argument) {
            $message .= $this->writeArgument($argument);
        }
        $message = substr($message, 0, -1) . PHP_EOL;
        foreach ($testResult["functions"] as $function => $result) {

            $message .= $function . " return " . $this->writeResult($result) . PHP_EOL;
        }
        $message .= "\033[31m end Failure\033[0m" . PHP_EOL;
        return $message;
    }

    /**
     * if argument is an array, return a string contains this array
     * else return a string with the type and the variable contains
     *
     * @param mixed $argument
     * @return string
     */
    private function writeArgument(mixed $argument): string
    {
        $message = "";
        if (gettype($argument) === "array") {
            $message .= "(array " . count($argument) . ")" . "[" . PHP_EOL;
            foreach ($argument as $key => $value) {
                $message .= $this->writeTypeOfVariable($key) . "=>" . $this->writeArgument($value) . PHP_EOL;
            }
            $message .= "],";
        } else {
            $message .= $this->writeTypeOfVariable($argument);
        }

        return $message;
    }

    /**
     * if $result is a bool, return a string with "true" ou "false"
     * else return $result
     *
     * @param mixed $result
     * @return string
     */
    private function writeResult(mixed $result): string
    {
        if ($result === true) {
            $resultWrited = "true";
        } elseif ($result === false) {
            $resultWrited = "false";
        } else {
            $resultWrited = $result;
        }
        return $resultWrited;
    }

    /**
     * get a variable and return a string contains the variable and its type
     *
     * @param mixed $var
     * @return string
     */
    private function writeTypeOfVariable(mixed $var): string
    {
        return "(" . gettype($var) . ") " . $var . ", ";
    }
}
