<?php
/**
 * @author Marcos Redondo <kusflo@gmail.com>
 */

namespace FizzBuzz;


class RuleFizzBuzz implements RulesInterface
{
    const _VALUE = 'FizzBuzz';

    public function check($number)
    {
        return (is_numeric($number) && ($number % 3) == 0 && ($number % 5) == 0);
    }

    public function getValue()
    {
        return self::_VALUE;
    }


}