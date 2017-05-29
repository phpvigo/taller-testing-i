<?php
/**
 * @author Marcos Redondo <kusflo@gmail.com>
 */

namespace FizzBuzz\Rules;

class ModuleThreeAndFive extends AbstractRule implements RulesInterface
{
    public function check($number)
    {
        return ($number % 3 == 0 and $number % 5 == 0);
    }
}