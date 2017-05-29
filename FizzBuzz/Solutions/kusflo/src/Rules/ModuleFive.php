<?php
/**
 * @author Marcos Redondo <kusflo@gmail.com>
 */

namespace FizzBuzz\Rules;

class ModuleFive extends AbstractRule implements RulesInterface
{
    public function check($number)
    {
        return ($number % 5 == 0);
    }
}