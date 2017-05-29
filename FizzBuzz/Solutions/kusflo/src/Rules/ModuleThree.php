<?php
/**
 * @author Marcos Redondo <kusflo@gmail.com>
 */

namespace FizzBuzz\Rules;

class ModuleThree implements RulesInterface
{
    public function check($number)
    {
        return ($number % 3 == 0);
    }
}