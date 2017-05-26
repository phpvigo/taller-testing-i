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
    public function of($value) {
        $number = new Number($value);

        if ($number->isMultipleOf(3) && $number->isMultipleOf(5)) {
            return "FizzBuzz";
        }

        if ($number->isMultipleOf(5)) {
            return "Buzz";
        }

        if ($number->isMultipleOf(3)) {
            return "Fizz";
        }
        return (string) $number;
    }
}