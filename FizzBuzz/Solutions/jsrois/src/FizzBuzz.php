<?php
/**
 * Created by PhpStorm.
 * User: jsrois
 * Date: 26/5/17
 * Time: 12:37
 */

namespace FizzBuzz;

class FizzBuzz
{
    public function of($number) {
        if ($this->isMultipleOfThree($number)) {
            return "Fizz";
        }
        return (string) $number;
    }

    private function isMultipleOfThree($number)
    {
        return $number % 3 == 0;
    }
}