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
        if ($this->isFizz($number)) {
            return "Fizz";
        }
        return (string) $number;
    }

    /**
     * a number is fizz if it's multiple of three
     */
    private function isFizz($number)
    {
        return $number % 3 == 0;
    }
}