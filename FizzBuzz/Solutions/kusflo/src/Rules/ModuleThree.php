<?php
/**
 * @author Marcos Redondo <kusflo@gmail.com>
 */

namespace FizzBuzz\Rules;

class ModuleThree extends AbstractRule implements RulesInterface
{
    public function check($number)
    {
        return ($number % 3 == 0);
    }
}