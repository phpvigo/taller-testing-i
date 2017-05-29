<?php
/**
 * @author Marcos Redondo <kusflo@gmail.com>
 */

namespace FizzBuzz\Rules;

class ModuleFive implements RulesInterface
{
    public function check($number)
    {
        return ($number % 5 == 0);
    }
}